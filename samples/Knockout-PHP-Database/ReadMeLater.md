personModel
=============
	
	* First we need to have a model that represents the data available for each student. As you can see we cache the current value of 
	'this' which refers to the personModel. Why do we need to do this? Because the value of this changes depending on the scope. 
	This means that we can still have access to the properties and methods of the personModel even when inside a function which is
	called on a different context (E.g. Callback function for AJAX requests).
	
	* The nameUpdate and ageUpdate stores the update state(either true or false). If the user clicks on the span the update state is
	updated to true. This also triggers the text field to show up and span to be hidden.
	
	* The nameUpdating and ageUpdating updates nameUpdate and ageUpdate to true. These 2 functions are executed when the user clicks
	on the span for the student name or age.
	
Model
=====

	* Next is the model in which the knockout.js bindings will be applied.
	
	* Inside the model we declare the default values for the students name, age, focus state of the student name text field, and the
	array that will store all the student details.
	
	
Create Student Record
=====================

	* Next is the code for creating a new student record. Since we're good citizens of the web we also validate the values entered by
	the user before actually submitting it to the server. If the validation passes we build the data to be submitted to the server,
	submit it to the server via POST method, and once the new student record is saved into the database it returns the id of the 
	student then the new student record is pushed into the observable student array. Since its observable, the moment we push a new
	student record into the array the user interface is also updated (the new student record is displayed on the table).
	
	* This is the beauty of using JavaScript MV* frameworks. Once the underlying model is updated, the UI is also updated. You don’t 
	have to write a single line of code that updates the UI. Pretty sweet right?
	
Validate User Input
===================

	* We simply check if the student name and age is not empty. And check if the age is a number. If all of these conditions passes 
	then we simply return true, otherwise false.
	
Fetching Student Records
========================

	* For the fetching of student records from the database all we have to do is to issue an AJAX request to the server. The server
	then returns a JSON string representing all the student records that was fetched from the database. And since we're specifying the
	dataType to be json if the server doesn’t return a json string nothing will actually be returned from the server. This also means
	that we no longer have to convert the returned json string manually by using something like JSON.parse to convert the json string
	to a JavaScript object. As you can see we're immediately looping through the returned data and pushing each of the student details
	to the observable array for storing student data.
	
Delete Student Record
=====================

	* Looking at the code, we have this 'person' variable available to us. This represents the current student.
	
	* Having access to the current student means that we also have access to the value of its properties like id, name and age.
	
Update Student Record
=====================
	
	* For the updating of student record we also have access to the current student. In this case we’ll have to get all the user
	details that are to be submitted to the server(id, name, age)
	
#Source : http://anchetawern.github.io/blog/2012/12/26/building-a-registration-system-with-knockoutjs/