from selenium import webdriver
import os

CURRENT_DIR_PATH = os.path.dirname(os.path.abspath(__file__))

options = webdriver.FirefoxOptions()
# 画面を表示しないので、ヘッドレスオプションを付ける
options.add_argument('--headless')
options.add_argument('--window-size=1280,1024')

with webdriver.Remote(
    command_executor='http://driver-firefox:4444',
    options=options,
) as driver:
    driver.get("http://dev:8080/")
    driver.save_screenshot(os.path.join(CURRENT_DIR_PATH, "evidences", "1.png"))

    title = driver.title
    print(f"title: ${title}")
    driver.implicitly_wait(0.5)
