import secrets
import netman
import time
from umqttsimple import MQTTClient
from machine import Pin, Timer
from PicoDHT22 import PicoDHT22
def connect_wifi():
    # Intialize Wifi
    country = 'IT'
    ssid = secrets.SSID
    password = secrets.PASSWORD
    wifi_connection = netman.connectWiFi(ssid, password, country)
def blink(get_sec):
    led.on()
    time.sleep(get_sec)
    led.off()
def blink_constant(timer):
    led.toggle()
# timer.init(freq=2.5, mode=Timer.PERIODIC, callback=blink)
# MQTT connect
def mqtt_connect():
    # client = MQTTClient(client_id, mqtt_server, user=user_t, password=password_t, keepalive=60)
    client = MQTTClient(client_id, mqtt_server, keepalive=60)
    client.connect()
    print('Connected to %s MQTT Broker' % (mqtt_server))
    return client
# reconnect & reset
def reconnect():
    print('Failed to connected to MQTT Broker. Reconnecting...')
    blink(5)
    #     time.sleep(5)
    machine.reset()
while True:
    # Initialize dht22
    dht22 = PicoDHT22(Pin(2, Pin.IN, Pin.PULL_UP))
    # connect wifi
    connect_wifi()
    # mqtt config
    mqtt_server = '129.154.50.7'  # bongsoo mqtt server
    client_id = 'PicoW'
    # user_t = 'pico'
    # password_t = 'picopassword'
    # topic_pub = 'hello'
    topic_pub_temp = 'bongsoo/1002/sensor/temp'
    # topic_pub_humi = 'bkfarm/310001/sensor/humi'
    last_message = 0
    message_interval = 5
    counter = 0
    # LED
    led = machine.Pin("LED", machine.Pin.OUT)
    timer = Timer()
    try:
        client = mqtt_connect()
    except OSError as e:
        reconnect()
    time.sleep(1)
    while True:
        try:
            T, H = dht22.read()
            print(T, H)
            msg_str = str(T) + ',' + str(H)
            client.publish(topic_pub_temp, msg=msg_str)
            #             client.publish(topic_pub_humi, msg=str(H))
            blink(0.2)
            print('published: ' + msg_str)
        except:
            reconnect()
            pass
        time.sleep(1)
client.disconnect()