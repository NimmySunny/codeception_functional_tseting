<?php 


class SignUpFormCest
{
   

    public function _before(\FunctionalTester $I)
        {
         
        }
    

        
    // tests
        public function tryToTest(\FunctionalTester $I)
    {        
            
       $I->amOnPage(['public/register']);
       
       $I->wantTo("test the candidate tester page");
       $I->see('Sign Up');
       
       $I->fillField('form input[name=fullname]', 'nimmy');
    
      
      }
    
    
}
