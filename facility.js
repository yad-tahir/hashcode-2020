



class facility
{
	id;
	libraries;
	name;
	scans;
	queuedRegistration;
	
	 constructor(id,name)
	{
		this.id=id;
		this.name=name;

		this.libraries=[];
		this.scans=[];
		this.queuedRegistration=[];

	}//construct

	 scan(book,library_id)
	{
		var scan = new book(book.id,book.name,book.score);
		scans.push(scan);
		return scan;

	}//scan()

	 register(libary)
	{
		return this.libraries.push( library);
	}//reigster

	 queue()
	{
		var data = [];

		for(var i=0;i< this.libraries.length;i++) {
			var library = this.libraries[i];
			console.log(library);
			// data.push( {  library.id : library.sign_up_duration  }  );	
		}
		console.log(data);
	}//Queue()

}//Class facility



