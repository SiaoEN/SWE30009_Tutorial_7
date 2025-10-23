import unittest
import time
from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.chrome.service import Service    

class TestMenuCalculation(unittest.TestCase):
    
    def setUp(self):
        """Runs before EACH test method - special name"""
        options = Options()
        
        # # Use when running locally using Chrome and chromedriver executable in subdirectory
        # options.binary_location = "chrome-win32/chrome.exe" 
        # chromedriver_path = "chromedriver-win32/chromedriver.exe"
        
        # Use when running in GitHub Actions
        options.binary_location = "/opt/chrome/chrome"  
        chromedriver_path = "/usr/local/bin/chromedriver"
        options.add_argument('--headless') 
        
        # Add these for cleaner, more robust tests:
        options.add_argument('--no-sandbox')
        options.add_argument('--disable-dev-shm-usage')
        options.add_argument('--disable-extensions')          # Extensions can break tests
        options.add_argument('--disable-popup-blocking')      # Ensure consistent behavior
        options.add_argument('--disable-notifications')       # No permission dialogs
        options.add_argument('--disable-infobars')            # Cleaner UI for screenshots
        options.add_argument('--disable-blink-features=AutomationControlled')  # Hide automation detection
        options.add_argument('--no-first-run') 
        
        service = Service(chromedriver_path)
        
        # Invoke Chrome browser, maximize browser window
        self.driver = webdriver.Chrome(service=service, options=options)
        self.driver.maximize_window()
    
    def tearDown(self):
        """Runs after EACH test method - special name"""  
        time.sleep(5)      # Wait for 5 seconds
        self.driver.close() # Always close the browser
        
    def test_menu_calculation(self):
        # Pricing information
        # burger        $price1 = 8.00;
        # fried rice    $price2 = 6.00;
        # roti canai    $price3 = 3.00;
        # coffee        $price4 = 2.00;
        # tea           $price5 = 1.00;

        # Sets of test cases to use
        test_case = ["24.00", "3", "0", "0","0","0"]
        # test_case = ["26.00", "3", "0", "0","0","2"]
        # test_case = ["23.00", "1", "0", "5","0","0"]
        # test_case = ["46.00", "2", "4", "0","3","0"]
        
        # # Navigate to the URL
        self.driver.get("http://localhost/swe30009/menu.php")
        
        # Emulate user entering the input fields with 0.5s delay
        self.driver.find_element(By.NAME, 'qty1').send_keys(test_case[1])
        time.sleep(0.5)
        self.driver.find_element(By.NAME, 'qty2').send_keys(test_case[2])
        time.sleep(0.5)
        self.driver.find_element(By.NAME, 'qty3').send_keys(test_case[3])
        time.sleep(0.5)
        self.driver.find_element(By.NAME, 'qty4').send_keys(test_case[4])
        time.sleep(0.5)
        self.driver.find_element(By.NAME, 'qty5').send_keys(test_case[5])

        # Wait for 3 seconds before click the Order button
        time.sleep(3)
        self.driver.find_element(By.NAME, 'submit_button').click()

        # Once the next page fully loads, 
        # get the computed value and compare with expected value
        computed_value = self.driver.find_element(By.NAME, 'total_amount').text
        expected_value = test_case[0]

        self.driver.save_screenshot("page_view_before_assert.png")
        print("Screenshot saved as page_view_before_assert.png")
        # Using unittest assertion: will automatically set the exit code
        self.assertTrue(computed_value == expected_value, f"Expected {expected_value}, but got {computed_value}")
        print("✅ Test PASSED")
        
        # Take screenshot if test passes
        self.driver.save_screenshot("test_passed.png")
        print("Screenshot saved as test_passed.png")
            
if __name__ == "__main__":
    # Run with unittest
    unittest.main()
