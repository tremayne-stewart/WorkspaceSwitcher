#!/usr/bin/env python

"""
A simple echo server
"""

import socket
from subprocess import call

host = ''
port = 50002
backlog = 5
size = 1024
s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
s.bind((host,port))
s.listen(backlog)
kill=1
passcode="tustew5791"
while kill==1:
    client, address = s.accept()
    data = client.recv(size)
    if len(data) != 0:
		if data.startswith(passcode):
			print data
			data=data[len(passcode):].strip()
			if data != 'q':
				call(["xdotool", "key", "Ctrl+Alt+%s" % data])
			elif data == 'q':
				kill=2	
client.close()
print "goodbye"


    
