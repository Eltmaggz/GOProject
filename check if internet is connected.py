import urllib.request

def check_internet():
    try:
        urllib.request.urlopen('http://www.google.com', timeout=3)
        print("Internet is connected.")
    except:
        print("No internet connection.")

check_internet()
