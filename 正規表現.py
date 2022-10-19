import re
URL = "djangoがないのかなと思って、pipしてみると、"
pattern = "dj"
res = re.match(pattern, URL)
print(res)


