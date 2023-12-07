import requests

# SSL関連でエラーになるので、サイトをGoogleに変更している。
# r = requests.get('https://www.impress.co.jp/')
r = requests.get('https://www.google.co.jp/')
print(r.text)
