import book;

public class library {

public int libId;
public String libName;
public int scansPerDay;
public int sendtime;
public int books[];

library(int libId, String libName, int scansPerDay, int sendtime, book[] books){

    this.libId=libId;
    this.libName=libName;
    this.scansPerDay=scansPerDay;
    this.sendtime=sendtime;
    this.books=books;
}

public book getBook(book mybook,int key){
	return this.books[key];	
}

public void queueBooks(){
	return this.books	
} 


}
