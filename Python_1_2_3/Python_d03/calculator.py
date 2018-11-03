#!/usr/bin/python3
import sys
from tkinter import *
root = Tk()
root.geometry("460x674+0+0")
root.title(" Scientific Calculator")
import math


class Calculator():
    def __init__(self):
        self.total = 0
        self.current = ""
        self.new_num = True
        self.op_pending = False
        self.op = ""
        self.eq = False

    def num_press(self, num):
        self.eq = False
        temp = text_box.get()
        temp2 = str(num)
        if self.new_num:
            self.current = temp2
            self.new_num = False
        else:
            if temp2 == '.':
                if temp2 in temp:
                    return
            self.current = temp + temp2
        self.display(self.current)

    def calc_total(self):
        self.eq = True
        self.current = float(self.current)
        if self.op_pending == True:
            self.do_sum()
        else:
            self.total = float(text_box.get())

    def display(self, value):
        text_box.delete(0, END)
        text_box.insert(0, value)

    def do_sum (self):
        if self.op == "add":
            self.total += self.current
        if self.op == "minus":
            self.total -= self.current
        if self.op == "times":
            self.total *= self.current
        if self.op == "divide":
            self.total /= self.current
        if self.op == "power":
            v = math.pow(self.total, self.current)
            self.total = v
        self.new_num = True
        self.op_pending = False
        self.display(self.total)

    def operation(self, op):
        self.current = float(self.current)
        if self.op_pending:
            self.do_sum()
        elif not self.eq:
            self.total = self.current
        self.new_num = True
        self.op_pending = True
        self.op = op
        self.eq = False

    def cancel(self):
      self.eq = False
      self.current = "0"
      self.display(0)
      self.new_num = True

    def all_cancel(self):
        self.cancel()
        self.total = 0

    def sin(self):
        a = float(text_box.get())
        a*=(math.pi/180)
        self.current = math.sin(a)
        self.display(self.current)

    def cos(self):
        a = float(text_box.get())
        a*=(math.pi/180)
        self.current = math.cos(a)
        self.display(self.current)

    def tang(self):
        a = float(text_box.get())
        a*=(math.pi/180)
        self.current = math.tan(a)
        self.display(self.current)


sum1 = Calculator ()

#Entry
text_box= Entry(root, justify="right", bd=10)
text_box.config(font=("Arial", 40))
text_box.place(x = 10, y=10, height=100, width=440) 
text_box.insert(0,"0")


  #Buttons
buttondiv = Button(root, text = '/', font=("Arial",25,"bold"), command=lambda: sum1.operation("divide"))
buttondiv.place(x = 10, y=120, height=80, width=80)

buttonmul = Button(root, text = '*', font=("Arial",25,"bold"), command=lambda: sum1.operation("times"))
buttonmul .place(x = 100, y=120, height=80, width=80)

buttonres = Button(root, text = '-', font=("Arial",25,"bold"), command=lambda: sum1.operation("minus"))
buttonres .place(x = 190, y=120, height=80, width=80)

buttonsum = Button(root, text = '+', font=("Arial",25,"bold"), command=lambda: sum1.operation("add"))
buttonsum .place(x = 280, y=120, height=80, width=80)

buttonexp = Button(root, text = '^', font=("Arial",25,"bold"), command=lambda: sum1.operation("power"))
buttonexp .place(x = 370, y=120, height=80, width=80)

buttontan = Button(root, text = 'tang', font=("Arial",25,"bold"), command=lambda: sum1.tang())
buttontan .place(x = 358, y=210, height=80, width=92)

buttoncos = Button(root, text = 'cos', font=("Arial",25,"bold"), command=lambda: sum1.cos())
buttoncos .place(x = 358, y=300, height=80, width=92)

buttonsin = Button(root, text = 'sin', font=("Arial",25,"bold"), command=lambda: sum1.sin())
buttonsin .place(x = 358, y=390, height=80, width=92)

button7 = Button(root, text = '7', font=("Arial",25,"bold"), command=lambda: sum1.num_press(7))
button7 .place(x = 10, y=210, height=106, width=106)

button8 = Button(root, text = '8',font=("Arial",25,"bold"), command=lambda: sum1.num_press(8))
button8 .place(x = 126, y=210, height=106, width=106)

button9 = Button(root, text = '9', font=("Arial",25,"bold"), command=lambda: sum1.num_press(9))
button9 .place(x = 242, y=210, height=106, width=106)

button4 = Button(root, text = '4', font=("Arial",25,"bold"), command=lambda: sum1.num_press(4))
button4 .place(x = 10, y=326, height=106, width=106)

button5 = Button(root, text = '5', font=("Arial",25,"bold"), command=lambda: sum1.num_press(5))
button5 .place(x = 126, y=326, height=106, width=106)

button6 = Button(root, text = '6', font=("Arial",25,"bold"), command=lambda: sum1.num_press(6))
button6 .place(x = 242, y=326, height=106, width=106)

button1 = Button(root, text = '1', font=("Arial",25,"bold"), command=lambda: sum1.num_press(1))
button1 .place(x = 10, y=442, height=106, width=106)

button2 = Button(root, text = '2', font=("Arial",25,"bold"), command=lambda: sum1.num_press(2))
button2 .place(x = 126, y=442, height=106, width=106)

button3 = Button(root, text = '3', font=("Arial",25,"bold"), command=lambda: sum1.num_press(3))
button3 .place(x = 242, y=442, height=106, width=106)

buttoncom = Button(root, text = '.', font=("Arial",25,"bold"), command=lambda: sum1.num_press('.'))
buttoncom .place(x = 10, y=558, height=106, width=106)

button0 = Button(root, text = '0', font=("Arial",25,"bold"), command=lambda: sum1.num_press(0))
button0 .place(x = 126, y=558, height=106, width=106)

buttonC = Button(root, text = 'C', font=("Arial",25,"bold"), command=lambda: sum1.all_cancel())
buttonC .place(x = 242, y=558, height=106, width=106)

buttonIgu = Button(root, text = '=', font=("Arial",25,"bold"), command=lambda: sum1.calc_total())
buttonIgu .place(x = 358, y=480, height=184, width=92)



root.mainloop()


        









        