# Intrepid Group Sample Application

## What is this?

This sample application is a small php website that's been built with a number
of areas that can be improved by you so that we can get a better idea of what
kind of developer you are.

Please note that there are no right or wrong answers in this, we are simply
trying to get a feel for what kind of developer you are, and how you approach
straightforward problems.

There are no trick tasks, and no hidden requirements.

We are assuming you are familiar with PHP, and are able to run PHP code locally
on your own computer without assistance. This application uses the Initial State 
pattern to automatically serialise and inject data into the HTML DOM as 
`window.__INITIAL_STATE__`. This data can then be consumed by our Vue app.

## General Instructions 

First, please take the time to read these instructions thoroughly and understand
them. If you have questions, or parts of it doesn't make sense, please do
get in contact via email.

Secondly, please make sure that you can startup and run the sample application
before you make any changes. It's important that you know it's working on your computer
before you jump in and make changes.

Thirdly, please go through each of the tasks listed below, read them thoroughly,
and carry out each change in the order they are listed. How you solve each
task is entirely up to you, but try and think of the simplest, and best way
to solve each task rather than the "trickiest" way you can do it. We are
not looking for anything fancy, just a good solid understanding of the problem
and a solution that works every time.

Finally, the existing code is there to be changed, feel free to modify any and all
of the code that is in this project as you see fit to achieve the tasks listed below.

When you have finished, submit your answer by following the instructions given below.

## Running the Sample Application

There are two options for running this project locally.

### Option 1: Running using the built in php webserver ( Recommended )

This option is very simple if you have PHP installed on your computer and it's >= php 5.4

To start up the built in webserver please do the following:

 - Open up a command prompt on your computer and navigate to the folder that holds these files
 - Start the webserver with the command `php -S localhost:8000`, you should see something that looks like this:
 
````
username@computer-name:~/Development/projects/intrepid-group-application$ php -S localhost:8000
PHP 7.0.0RC1 Development Server started at Thu Mar 17 14:34:23 2016
Listening on http://localhost:8000
Document root is /Users/afoozle/Development/projects/intrepid-group-application
Press Ctrl-C to quit.
````

 - Open up a web browser and navigate to `http://localhost:8000`, you should now see the sample application 
 and any changes you make to the files will be reflected here


### Option 2: Installing on an existing php based webserver ( Not Recommended )

If you have an exising webserver that is running php, you can place this entire folder in the webroot of your webserver, 
or a subdirectory of your choosing, and navigate to your webserver locally.

## Submitting your Answer

 1. Zip up the files and directory into a new file called 'intrepid-group-application.zip' which contains all of the code
 2. Reply to the email that contained these instructions and attach your zip file
 3. Send the email to `matthew.wheeler@intrepidtravel.com`

## Tasks

### Task 1. Add book category to the information we store about a book

As a customer,
I want to know the type of book,
So that I can easily find the books I am interested in

*Acceptance Criteria*

 - Add "Category" (e.g. Childrens, History, Romance, Travel, etc) to the information we store about a book (you can make the values up)
 - Display the "Category" of the book in the table after the Author column

### Task 2. Only show English Language books

As an English customer of this website, 
I want to only see English language books, 
So that I can easily find the books I am interested in

*Acceptance Criteria*

 - Default list of books must only contain English language books
 - Default list of books must NOT contain non-English books
 - `Language` column should be removed from display

### Task 3. Sort books by year of publication by default

As a customer interested in newer books, 
I want to see the list of books, listed by year of publication, 
So that I can easily find the books I am interested in

*Acceptance Criteria:*

 - Table of books is sorted by year of publication from newest to oldest
 
### Task 4. Filter books in table by rating

As a customer who likes to read good books,
I want to easily identify book ratings,
So that I can easily find the books I am interested in

*Acceptance Criteria:*

 - Add a select field above the table that allows you to filter the books depending on the rating selected
 - Include the following ratings in the select field `All`, `1`, `2`, `3`, `4`, `5`
 - When a rating option is selected remove the books from the table that do not match the rating
 - When `All` is selected show all books in the table

### Task 5. Highlight books that were published after 1950

As a customer who likes new books,
I want to be able to identify any book that is newer than 1950,
So that I can easily find the books I am interested in

*Acceptance Criteria:*

 - If a book is published on or after 1950 highlight the row in the table

### Task 6. Hide the Author, Rating and Category column when the page is viewed on mobile

As a customer who is always on the move, 
I want to easily read the book catalogue on my mobile device,
So that I can easily find the books I am interested in

*Acceptance Criteria:*

 - When the page is viewed on a mobile phone width browser window the `Author`, `Rating` and `Category` columns should be hidden
 - When the page is made desktop size again, the `Author`, `Rating` and `Category` columns should be visible
