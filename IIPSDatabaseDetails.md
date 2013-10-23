# IIPS database Details:

** Master Table -User **

	* Fields
		* User Id( Pk)
		* Name 
		* surname
		* Father's Name
		* Mother's Name
		* Email(iips.edu.in)
		* Type( Student, Faculty, Alumini, Staff, Admin, Director)
		* Current Address
		* Permanent Address
		* Telephone Number
		* Mobile Number 
		* Status



** Student Database **

	* Fields
		* User Id (FK from User Master Table)
		* Enrollment Number
		* Roll Number 
		* Current Course
		* Year of Enrollment
		* Batch ID
		* Alternate Email
		* Last Institute Attended (H .Sec, Graduate, Post Graduate, Other, )
		* Institute Name
		* Univesity / Board ( H sec, University, )
		* Area of Interest
		* Internship Exp
		* Pic(link)
		* Website
		* Blog
		* github
		* Linked In
		* Facebook
		* google plus
		* twitter
		* Resume(link)


** Faculty Database **

	* Fields 
		* UserId(FK from User Master Table)
		* Discipline
		* Post
		* Responsibility
		* Area of Interest
		* Previous Job
		* Web Url
		* Blog
		* Resume(link)
		* Alternate Email
		* github
		* Linked In
		* Facebook
		* Google Plus
		* twitter
		* Pic(link)

** Staff Database **

	* Fields 
		* UserId(FK from User Master Table)
		* Post
		* Responsibility
		* Web Url
		* Blog
		* Resume(link)
		* Alternate Email
		* Linked In
		* Facebook
		* Google Plus
		* twitter
		* Pic(link)



** Alumini Database **

	
	* Fields
		* User Id(FK from User Master Table)
		* Enrollment Number
		* Roll Number 
		* Current Company
		* Job Description
		* Previous Jobs
		* Experience
		* Area of Interest
		* Year of Enrollment
		* Batch Code
		* github
		* Linked In
		* Facebook
		* Google Plus
		* Alternate Email
		* Resume
		* Last Institute Attended (H .Sec, Graduate, Post Graduate, Other, )
		* Institute Name
		* Univesity / Board ( H sec, University, )
		* Pic(link)

#### Tables assosiated with DEO. 

** Course Table **

	* Fields
		* Course ID(pk)
		* Course Name
		* Number of semester
		* Discipline

** Batch Table **
	
	* Fields
		* Batch ID(pk)
		* Year
		* Course

** BatchFacilitator Table **
	* Fields
		* ID(pk)
		* UserId(FK from User Master Table)
		* Batch ID(FK from Batch ID Table)


** TempUser table Table **
	* Fields
		* Temp_Transaction ID
		* Name 
		* surname
		* Father's Name
		* Mother's Name
		* Email
		* Type( Student, Faculty, Alumini, Staff, Admin, Director)
		* Current Address
		* Permanent Address
		* Telephone Number
		* Mobile Number 
		* Status
		* Roll Number
		* Enrollment Number
		* Discipline
		* Post
		* Role
		* Batch ID
		* Course ID


** Publications **
	* UserID(Fk to master table)
	* Pub_Title
	* Pub_Org
	* Co-Authors
	* link

** Table **
	* Fields
** Table **
	* Fields
** Table **
	* Fields