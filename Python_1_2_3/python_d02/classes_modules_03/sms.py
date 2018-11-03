#!/usr/bin/python3.4.2
from sendable import Sendable
class Sms(Sendable):

    def __init__(self, *, _body, _from, _to):
        super().__init__(_body=_body, _subject=None, _from=_from, _to=_to)
       

#test
#"newsendable = Sendable("bodyhello", "subjecthello", "fromhello", "tohello")
newsms = Sms(_body="bodysms",  _from="fromsms", _to="tosms")     