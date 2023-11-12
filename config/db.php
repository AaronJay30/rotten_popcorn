<?php
$driver = new mysqli_driver();
$driver->report_mode = MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR;
class myDB
{
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'movie_review';

    public $mysql;
    public $res;

    public function __construct()
    {
        try {
            if (!$this->mysql = new mysqli($this->servername, $this->username, $this->password,  $this->dbname)) {
                throw new Exception($this->mysql->connect_error);
            }
        } catch (Exception $e) {
            die("ERROR: Database connection failed!<br>" . $e);
        }
    }

    private function fetchSelect($result)
    {
        $records = array();
        while ($row = $result->fetch_assoc()) {
            array_push($records, $row);
        }
        $this->res = $records;
    }

    public function insert($table, $data)
    {
        $table_columns = implode(',', array_keys($data));
        $table_values = implode("','", $data);
        $sql = "INSERT INTO $table($table_columns) VALUES ('$table_values')";
        $this->res = $this->mysql->query($sql);
    }

    public function select($table, $row = "*", $where = null)
    {
        $sql = "SELECT $row FROM $table " . ($where == null ? " " : "WHERE $where");
        $result = $this->mysql->query($sql);
        $this->fetchSelect($result);
    }

    public function selectJoin($table, $row = '*', $where = null)
    {
        $sql = "SELECT $row FROM $table INNER JOIN user on $table.userID = user.userID INNER JOIN movie on $table.movieID = movie.movieID WHERE $where";
        $result = $this->mysql->query($sql);
        $this->fetchSelect($result);
    }

    public function countMovieRatings($table, $movieID)
    {
        $ratingsCount = array();

        $totalReviewCount = 0;

        for ($rating = 1; $rating <= 5; $rating++) {
            $sql = "SELECT COUNT(*) AS user_count FROM $table WHERE movieID = $movieID AND rating = $rating";
            $result = $this->mysql->query($sql);
            $row = $result->fetch_assoc();
            $ratingsCount[$rating] = $row['user_count'];

            $totalReviewCount += $row['user_count'];
        }

        $ratingsCount['total'] = $totalReviewCount;

        $this->res = $ratingsCount;
    }

    public function selectFeaturedMovie($table, $row = "*", $where = null, $count = 0, $random = true)
    {
        $orderClause = $random ? "RAND()" : "average_rating DESC";
        $sql = "SELECT $row FROM $table " . ($where == null ? "" : "WHERE $where") . " ORDER BY $orderClause" . ($count > 0 ? " LIMIT $count" : "");
        $result = $this->mysql->query($sql);
        $this->fetchSelect($result);
    }

    public function update($table, $data, $where)
    {
        $set = array();
        foreach ($data as $column => $value) {
            $set[] = "$column = '$value' ";
        }
        $set_str = implode(',', $set);
        $sql = "UPDATE $table SET $set_str WHERE $where";
        $this->res = $this->mysql->query($sql);
    }

    public function delete($table, $where)
    {
        $sql = "DELETE FROM $table WHERE $where";
        $this->res = $this->mysql->query($sql);
    }

    public function __destruct()
    {
        if ($this->mysql) {
            $this->mysql->close();
        }
    }
}
