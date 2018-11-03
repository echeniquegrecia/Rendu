from flask import Flask, request, jsonify, make_response
from flask_sqlalchemy import SQLAlchemy
from werkzeug.security import generate_password_hash, check_password_hash
from functools import wraps
import  uuid
import token
import datetime
import jwt

app = Flask(__name__)
app.config['SECRET_KEY'] = 'apisecret'
app.config['SQLALCHEMY_DATABASE_URI'] = 'sqlite://///home/grecia/Rendu/Final_Project/API/test.db'
db = SQLAlchemy(app)

class User(db.Model):
    id = db.Column (db.Integer, primary_key=True)
    public_id = db.Column(db.String(50), unique=True)
    name = db.Column (db.String(50))
    password = db.Column (db.String(80))
    admin = db.Column(db.Boolean)

class Articles(db.Model):
    id = db.Column (db.Integer, primary_key=True)
    title = db.Column (db.String(50))
    body = db.Column (db.String(500))
    user_id = db.Column(db.Integer)


def token_required(f):
    @wraps(f)
    def decorated_function(*args, **kwargs):
        token = None

        if 'x-access-token' in request.headers:
            token = request.headers['x-access-token']
        
        if not token:
            return jsonify({'message': 'Token is missing'}), 401

        try:
            data = jwt.decode(token, app.config['SECRET_KEY'])
            current_user = User.query.filter_by(public_id=data['public_id']).first()
        except:
            return jsonify({'message': 'Token is invalid'})

        return f(current_user, *args, **kwargs)
    
    return decorated_function


@app.route('/', methods = ['GET'])
def index():
    return jsonify({'message':'Hello'})

@app.route('/user', methods = ['GET'])
@token_required
def get_all_users(current_user):

    if not current_user.admin:
        return jsonify({'message': 'Cannot do this action'})

    users = User.query.all()
    result = []
    for user in users:
        user_data = {}
        user_data['public_id'] = user.public_id
        user_data['name'] = user.name
        user_data['password'] = user.password
        user_data['admin'] = user.admin
        result.append(user_data)

    return jsonify({'users': result})

@app.route('/user/<public_id>', methods = ['GET'])
@token_required
def get_one_user(current_user, public_id):
    user = User.query.filter_by(public_id=public_id).first()
    if not user:
        return jsonify({'message': 'Not user found'})

    user_data = {}
    user_data['public_id'] = user.public_id
    user_data['name'] = user.name
    user_data['password'] = user.password
    user_data['admin'] = user.admin
    return jsonify({'user': user_data})

@app.route('/user', methods = ['POST'])
@token_required
def create_user(current_user):
    data = request.get_json()
    print ("hello")
    hashed_password = generate_password_hash(data['password'], method= 'sha256')
    print (hashed_password)
    new_user = User(public_id = str(uuid.uuid4()), name=data['name'], password=hashed_password, admin=False)
    db.session.add(new_user)
    db.session.commit()
    return jsonify({'message':'New user created'})

@app.route('/user/<public_id>', methods = ['PUT'])
@token_required
def promote_user(current_user, public_id):
    user = User.query.filter_by(public_id=public_id).first()
    if not user:
        return jsonify({'message': 'No user found!'})
    user.admin = True
    db.session.commit()
    return jsonify({'message': 'The user has been promoted'})

@app.route('/user/<public_id>', methods = ['DELETE'])
@token_required
def delete_user(current_user, public_id):
    user = User.query.filter_by(public_id=public_id).first()
    if not user:
        return jsonify({'message': 'No user found!'})
    db.session.delete(user)
    db.session.commit()
    return jsonify({'message': 'The user has been deleted!'})

#Creation of the authentication
@app.route('/login')
def login():
    auth = request.authorization

    if not auth or not auth.username or not auth.password:
        return make_response('Could not verify', 401, {'WWW-Authenticate': 'Basic realm="login required"'})

    user = User.query.filter_by(name=auth.username).first()

    if not user:
        return make_response('Could not verify', 401, {'WWW-Authenticate': 'Basic realm="login required"'})

    if check_password_hash(user.password, auth.password):
        token = jwt.encode({'public_id': user.public_id, 'exp': datetime.datetime.utcnow() + datetime.timedelta(minutes=30)}, app.config['SECRET_KEY'])
        #return jsonify({'message': "Welcome"})
        return jsonify({'token': token.decode('UTF-8')})

    return make_response('Could not verify', 401, {'WWW-Authenticate': 'Basic realm="login required"'}) 


@app.route('/register', methods = ['POST'])
def register_user():
    data = request.get_json()
    hashed_password = generate_password_hash(data['password'], method= 'sha256')
    new_user = User(public_id = str(uuid.uuid4()), name=data['name'], password=hashed_password, admin=False)
    db.session.add(new_user)
    db.session.commit()
    return jsonify({'message':'New user created'})   

if  __name__ == '__main__':
     app.run(debug = True)

def create_app(config_name):

    return app