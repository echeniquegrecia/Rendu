#!/usr/bin/python3
from sendable import Sendable
class Private(Sendable):

    def __init__(self,  *,_body, _subject, _from, _to):
        super().__init__(_body=_body, _subject=_subject, _from=_from, _to=_to)
       

#test
newprivate = Private(_body="bodyprivate", _from="greciaprivate", _subject="heyprivate", _to="Mundoprivate")