<?

namespace App\Model;
use App\Config\Database;

class Article {

    private $title;
    private $image;
    private $content;
    private $conn;

    public function __construct() {
        $this->conn = Database::getConnection();
    }

    public function setArticle($title, $image, $content) {
        $this->title = $title;
        $this->image = $image;
        $this->content = $content;
    }

    public function addArticle() {
        $stmt = $this->conn->prepare("INSERT INTO articles (title, image, content) VALUES (:title, :image, :content)");
        $stmt->bindParam(':name', $this->title);
        $stmt->bindParam(':email', $this->image);
        $stmt->bindParam(':password', $this->content);
        return $stmt->execute();
    }


}