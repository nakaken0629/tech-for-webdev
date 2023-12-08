require "requests"

response = Requests.request("GET", "https://www.impress.co.jp/")
puts response.body
