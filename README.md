p4.iportal.pw
=============

Project 4

Project Description: 

This is a simple application that users can use to exchange currencies, users have a list of 8 options of currencies to exchange money from; to the same list of 8 options of currencies (This application can support all world currencies, but in the interest of time and to be able to do full testing - I limited the options to eight currencies that include top 5 major world currencies). Only numeric values are allowed for exchange.

This project uses Core PHP Framework, MySQL database and JavaScript for user input validation. In project 4 I also worked on addressing some issues that were reported in P2, basically in P2 I was not able to create any decent theme; with this project I have a decent theme for the site that is responsive. And issues and bugs from P2 were addressed in P4. 

Project Features: 

- Real time currency exchange rates are used to exchange currencies using Yahoo web-service.  
- Project 4 uses curl functionality of Core PHP framework, that was covered in class 12. The source currency and target currency selected by the user on the form is sent to the yahoo service to find out the exchange rate for the two currencies, the exchange rate is used in c_currnecy controller to do the currency conversion. The output is displayed on a view along with timestamp of the exchange rate.   
- Users can view history of their transactions on "Your Currency Exchange History" page - where all exchange transactions are displayed along with the timestamp of the transaction. All historical transactions are stored in the database. 
- When users sign up on the website they are sent a welcome email.
- Users can Sign up, Login, Log out, post a note, See list of other currency traders on the site, follow or unfollow other users. 


