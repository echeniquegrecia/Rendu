#!/usr/bin/python3.4.2
class Sendable:

    def __init__(self, *, _body, _subject, _from, _to):
        import time
        self._body= _body
        self._subject= _subject
        self._from = _from
        self._to = _to
        self._created_at = time.strftime("%Y-%m-%d %H:%M:%S", time.gmtime())
        self._updated_at = time.strftime("%Y-%m-%d %H:%M:%S", time.gmtime())
        self._sent_at = None

        print(self._body,self._subject,self._from,self._to)

    def send(self):
        import time
        if self._sent_at == None:
            self._sent_at= time.strftime("%Y-%m-%d %H:%M:%S", time.gmtime())
        else:
            raise ValueError("DataAlreadySent")

#test
newsendable = Sendable(_body="bodysendable", _from="greciasendable", _subject="heysendable", _to="Mundo")
#newsendable.send()
#newsendable.send()

