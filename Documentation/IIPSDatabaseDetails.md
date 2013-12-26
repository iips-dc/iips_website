# IIPS database Details:

** Master Table -User **

	* Fields
		* User Id( Pk) 		(int 6)
		* Name  			(text 20)
		* surname			(text 20)
		* Father's Name 	(text 20)
		* Mother's Name 	(text 20)
		* DOB 				(date)
		* Email(iips.edu.in) (varchar 40)
		* Type( Student, Faculty, Alumini, Staff, Admin, Director) 	  (text 6)
		* Current Address   (varchar 40)
		* Permanent Address (varchar 40)
		* Telephone Number  (varchar 16,, opt)
		* Mobile Number    	(varchar 14)
		* Status			(TinyInt 1)



** Student Database **

	* Fields
		* User Id (FK from User Master Table)  (int 6)
		* Enrollment Number				(varchar 10)	
		* Roll Number 					(varchar 10)
		* Current Course				(varchar 15)
		* Current semester 				(tinyint 2)
		* Year of Enrollment			(year 4)
		* Batch ID    					(varchar 10)
		* Alternate Email 				(varchar 40, opt)
		* Last Qualification (H .Sec, Graduate, Post Graduate, Other, )			  (text 11 )
		* Institute Name             (text 40)
		* Univesity / Board ( H sec, University,) (text 40)
		* Area of Interest				(MediumText 100)  
		* Internship Exp(in months)     (smallint 3, opt)
		* Pic(link)						(varchar 40, opt)
		* Website						(varchar 50, opt)
		* Blog							(varchar 50, opt)
		* github						(varchar 50, opt)
		* Linked In 					(varchar 50, opt)
		* Facebook                      (varchar 50, opt)
		* google plus 					(varchar 50, opt)
		* twitter 						(varchar 50, opt)
		


** Faculty Database **

	* Fields 
		* UserId(FK from User Master Table)      (int 6) 
		* Discipline					(text 10)
		* Post 							(text 15)
		* Responsibility				(text 15)
		* Date of Joining				(date)
		* Area of Interest				(MediumText 100, opt)
		* Previous Jobs 				(LongText 400, opt)
		* Website						(varchar 50, opt)
		* Blog							(varchar 50, opt)
		* github						(varchar 50, opt)
		* Linked In 					(varchar 50, opt)
		* Facebook                      (varchar 50, opt)
		* google plus 					(varchar 50, opt)
		* twitter						(varchar 50, opt)
		* Resume(link)					(varchar 40, opt)
		* Alternate Email				(varchar 40, opt)
		* Pic(link)						(varchar 40)

** Staff Database **

	* Fields 
		* UserId(FK from User Master Table) (int 6) 
		* Post								(text 15)
		* Responsibility					(text 15)
		* Website							(varchar 40,opt)	
		* Blog								(varchar 40,opt)
		* Resume(link)						(varchar 40,opt)
		* Alternate Email					(varchar 40,opt)
		* Linked In 						(varchar 40,opt)
		* Facebook 							(varchar 40,opt)
		* Google Plus 						(varchar 40,opt)
		* twitter 							(varchar 40,opt)
		* Pic(link)							(varchar 40)



** Alumni Database **

	
	* Fields
		* User Id(FK from User Master Table)	(int 6)
		* Enrollment Number						(varchar 10)
		* Roll Number 							(varchar 10)
		* Current Company						(text 30,opt)
		* Job Description 						(longText 400,opt)
		* Previous Jobs							(longText 400, opt)
		* Experience(in months)					(mediumInt 3)
		* Area of Interest						(MediumText 100, opt)
		* Year of Enrollment					(Year 4)
		* Batch ID  							(varchar 10)
		* Website 								(varchar 40, opt)
		* github 								(varchar 40, opt)
		* Blog									(varchar 40, opt)
		* Linked In 							(varchar 40, opt)
		* Facebook 								(varchar 40, opt)
		* Google Plus 						    (varchar 40, opt)
		* Alternate Email 						(varchar 40, opt)        
		* Last Qualification (H .Sec, Graduate, Post Graduate, Other, )  (text 11)
		* Institute Name 						(text 40)
		* Univesity / Board ( H sec, University) (text 40)
		* Pic(link)								(varchar 40)

#### Tables assosiated with DEO. 

** Course Table **

	* Fields
		* Course ID(pk) 						(tinyint 2)
		* Course Name 							(varchar 15)
		* Number of semester 					(tinyint 2)
		* Discipline 							(text 10)

** Batch Table **
	
	* Fields
		* Batch ID(pk) 							(varchar 8)
		* Year 									(year )
		* Course ID(Fk to course table)         (tinyint 2) 				 			

** BatchFacilitator Table **
	* Fields
		* ID(pk) 								(int 4)
		* UserId(FK from User Master Table)     (int 6)
		* Batch ID(FK from Batch ID Table)      (varchar 8)


** TempUser table Table **
	* Fields
		* Temp_Transaction ID 					(varchar 10)
		* Name 									(text 20)
		* surname 								(text 20)
		* Father's Name 						(text 20)
		* Mother's Name 						(text 20)
		* Email 								(text 40)
		* Type( Student, Faculty, Alumini, Staff, Admin, Director) (text 6) 
		* Current Address 						(varchar 40, opt)
		* Permanent Address 					(varchar 40, opt)
		* Telephone Number 						(varchar 16, opt)
		* Mobile Number  						(varcahr 14)
		* Roll Number 							(varchar 10, opt)
		* Enrollment Number 					(varchar 10, opt)
		* Discipline 							(text 10)
		* Post 									(text 15, opt)
		* Responsibility 						(text 15, opt)
		* Batch ID 								(varchar 8, opt)
		* Course ID  							(tinyint 2, opt)


** Publications **
	*Fields
		* UserID(Fk to master table) 			(int 6)
		* Pub_Title 							(text 50)
		* Pub_Year 								(year 4)
		* Pub_Org 								(text 50)
		* Co-Authors 							(text 50, opt)	
		* link 									(text 50, opt)	

** Subject_Table **
	* Fields
		* Subject_ID (pk) 						(int 4)	
		* Course_ID  (pk) 						(tinyint 2)
		* Subject_Name 							(text 50)

** Table **
	* Fields
** Table **
	* Fields