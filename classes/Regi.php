<?
class Regi
{
	private $db_con;
	function __construct($db_con)
	{
		$this->db_con = $db_con;
	}
	public function registration(&$data)
	{
		if($data['password'] == $data['rpassword'])
		{
			$login = trim($data['login']);
			$rpassword = md5($data['rpassword']);
			$query = "INSERT INTO users(`id`, `login`, `password`, `is_Admin`) VALUES (NULL, '$login', '$rpassword', 0)";
			$insert = mysqli_query($this->db_con, $query);
			return 1;
		}
		else
			return 0;
	}
}
?>