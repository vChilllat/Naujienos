<?php
 
class Artic le {
    protected $id; // tokios pacios savybes, kaip lenteles stulpeliai
    protected $author;
    protected $shortContent;
    protected $content;
    protected $publishDate;
    protected $type;
    protected $title;
    protected $addDate;
    protected $preview;


    public function __construct($row) {  //perduodama duombazes eilute
        $this->id=$row['id'];  //is eilutes masyvo paimama, kas reikalinga
        $this->author=$row['author'];
        $this->shortContent=$row['shortContent'];
        $this->content=$row['content'];
        $this->publishDate=$row['publishDate'];
        $this->type=$row['type'];
        $this->title=$row['title'];
        $this->addDate=$row['addDate'];
        $this->preview=$row['preview'];
    }
}
 
class NewsArticle  extends Article { // paveldi viska is Article
    public function printItem(){ // printItem visur tokiu paciu vardu
        echo $this->type."<br>";
        echo $this->author."<br>";
        echo $this->content."<br>";
        echo "<form method='GET' action='singleArticleView.php'>"
        . "<input type='Submit' name='submit' value='Plačiau'>"
                . "<input type='hidden' name='pateikimas' value='$this->id' </form>";
        echo "<br>";
    }
}
class PhotoArticle extends Article { // klases tokios pat, kaip tipai lenteleje
        public function printItem(){
        echo $this->type."<br>";
        echo $this->publishDate."<br>";
        echo $this->content."<br>";
        echo "<form method='GET' action='singleArticleView.php'>"
        . "<input type='Submit' name='submit' value='Plačiau'>"
                . "<input type='hidden' name='pateikimas' value='$this->id' </form>";
    }
}
class ShortArticle extends Article {
        public function printItem(){
        echo $this->type."<br>";
        echo $this->author."<br>";
        echo $this->shortContent."<br>";
        echo "<form method='GET' action='singleArticleView.php'>"
        . "<input type='Submit' name='submit' value='Plačiau'>"
                . "<input type='hidden' name='pateikimas' value='$this->id' </form>";
    }
}
