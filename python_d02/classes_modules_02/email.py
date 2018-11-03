#!/usr/bin/python3
from sendable import Sendable
class Email(Sendable):

    def __init__(self,  *,_body, _subject, _from, _to):
        super().__init__(_body=_body, _subject=_subject, _from=_from, _to=_to)
       

#test
newemail = Email(_body="bodyemail", _from="greciaemail", _subject="heyemail", _to="Mundoemail")