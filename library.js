class library
{

	constructor(id,name,scan_per_day,sign_up_duration)
	{
		this.id = id;
		this.name = name;
		this.scan_per_day = scan_per_day;
		this.sign_up_duration = sign_up_duration;
		this.books = [];
		
	}//constructor()

	 getBook(book,key)
	{
		return this.books[key];
	}//scan();

	 queueBooks(books)
	{
		 this.books=sort(books);
		 return this.books.reverse();
	}//queueBooks()




}


