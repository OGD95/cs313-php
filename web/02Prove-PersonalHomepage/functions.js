async function changePageName(){
    document.getElementsById("title").innerHtml = "Dylan's CS 313 " + document.getElementsByTagName("title").value;
}