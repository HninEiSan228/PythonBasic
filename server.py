import socket
import sys
def create_socket():
    try:
        global host
        global port
        global s
        host = ""
        port = 9999
        s=socket.socket()
    except socket.error as msg:
        print("socket creation error:"+str(msg))
def bind_socket():
    try:
        global host
        global port
        global s
        print("Binding the Port "+str(port))
        s.bind((host,port))
        s.listen(5)
    except socket.error as msg:
        print("Socket binding error"+str(msg)+"\n" + "Retrying......")
        bind_socket()

