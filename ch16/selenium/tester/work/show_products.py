from selenium import webdriver
from selenium.webdriver.common.by import By
import os

CURRENT_DIR_PATH = os.path.dirname(os.path.abspath(__file__))
os.makedirs(
    os.path.join(CURRENT_DIR_PATH, "evidences"), exist_ok=True)

# 画面を表示しないので、ヘッドレスオプションを付ける
options = webdriver.FirefoxOptions()
options.add_argument('--headless')
options.add_argument('--window-size=1280,1024')

with webdriver.Remote(
    command_executor='http://driver-firefox:4444',
    options=options,
) as driver:
    # 画面を開く
    driver.get("http://dev:8080/")
    driver.save_screenshot(
        os.path.join(CURRENT_DIR_PATH, "evidences", "1.png"))
    products = driver.find_element(By.ID, "products")
    assert 0 == len(products.find_elements(By.TAG_NAME, "div"))

    # 商品を検索する
    driver.find_element(By.ID, "search").click()
    driver.save_screenshot(
        os.path.join(CURRENT_DIR_PATH, "evidences", "2.png"))
    products = driver.find_element(By.ID, "products")
    assert 3 == len(products.find_elements(By.TAG_NAME, "div"))
Ï
