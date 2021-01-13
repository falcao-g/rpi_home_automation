import RPi.GPIO as gpio
import sys

def inicializaBoard():
    gpio.setmode(gpio.BOARD)
    gpio.setwarnings(False)

def definePinoSaida(pino):
    gpio.setup(pino, gpio.OUT)

def escreveParaPorta(pino, estadoPorta):
    gpio.output(pino, estadoPorta)

pino = int(sys.argv[1])
estadoPorta = int(sys.argv[2])

inicializaBoard()
definePinoSaida(pino)
escreveParaPorta(pino, estadoPorta)