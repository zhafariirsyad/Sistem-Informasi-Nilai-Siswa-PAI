<?php 
	
	$username = "root";
    $password = "";
    $database = "db_cbt";
    $hostname = "localhost";
    $conn = mysqli_connect($hostname,$username,$password,$database) or die("Connection Corrupt");

    class oop{

    	public function login($username,$password,$level){
    		global $conn;

    		$sql = "SELECT * FROM tb_user WHERE username='$username' AND password='$password' AND level='$level'";
    		$query = mysqli_query($conn,$sql);
    		$rows = mysqli_num_rows($query);
    		$assoc = mysqli_fetch_assoc($query);
    		if ($rows > 0) {
    			if ($level == 'Guru') {
					echo "<script>alert('Welcome Guru');document.location.href='PageGuru.php'</script>";
					$_SESSION['username'] = $username;    
    			}
    			elseif($level == 'Siswa') {
    				echo "<script>alert('Welcome Siswa');document.location.href='PageSiswa.php'</script>";    
    				$_SESSION['username'] = $username;
    			}
    		}else{
                echo "asadasd";
            }
    	}
        public function select_where($table,$where){
            global $conn;
            $sql = "select * from $table where $where";
            return $query = mysqli_query($conn,$sql);
        }
    	public function validatehtml($field){
    		$field = htmlspecialchars($field);
    		return $field;
    	}

    	public function check_session(){
    		global $conn;
    		if (!isset($_SESSION['username'])) {
    			return 'false';
    		}
    		else{
    			return 'true';
    		}
    	}

    	public function logout(){
            session_destroy();
            header("Location:login.php");
        }

        public function simpan($table,$values,$redirect){
        	global $conn;

        	$sql = "INSERT INTO $table SET $values";
        	$query = mysqli_query($conn,$sql);
        	if ($query) {
        		echo "<script>alert('Berhasil');document.location.href='$redirect'</script>";
        	}
        	else{
        		echo mysqli_error($conn);
        	}
        }
        public function simpannn($table,$values){
            global $conn;

            $sql = "INSERT INTO $table SET $values";
            $query = mysqli_query($conn,$sql);
            if ($query) {
            return true;
            }
            else{
                echo mysqli_error($conn);
            }
        }

        public function simpann($table,$values,$where,$whereisi,$redirect){
            global $conn;

            $sql = "INSERT INTO $table SET $values WHERE $where = '$whereisi'";
            $query = mysqli_query($conn,$sql);
            if ($query) {
                echo "<script>alert('Berhasil');document.location.href='$redirect'</script>";
            }
            else{
                echo mysqli_error($conn);
            }
        }

        public function ubah($table,$isi,$where,$whereisi,$redirect){
        	global $conn;
        	$sql = "UPDATE $table SET $isi WHERE $where = '$whereisi'";
        	$query = mysqli_query($conn,$sql);
        	if ($query) {
        		echo "<script>alert('Berhasil');document.location.href='$redirect'</script>";
        	}
        	else{
        		echo mysqli_error($conn);
        		// echo "<script>alert('Failed');document.location.href='$redirect'</script>";
        	}
        }

        public function ubahh($table,$isi,$where,$whereisi){
            global $conn;
            $sql = "UPDATE $table SET $isi WHERE $where = '$whereisi'";
            return $query = mysqli_query($conn,$sql);
            
        }
        
        public function nawal($table,$isi,$where,$whereisi){
            global $conn;
            $sql = "INSERT INTO $table SET $isi WHERE $where = '$whereisi'";
            return $query = mysqli_query($conn,$sql);
            
        }

        public function edit($conn,$table,$where){
			$sql = "SELECT * FROM $table WHERE $where";
			$query = mysqli_query($conn,$sql);
			$isi = mysqli_fetch_array($query);
			return $isi;
		}

        public function select($table){
            global $conn;
            $sql = "SELECT * FROM $table";
            $query = mysqli_query($conn,$sql);
            $data = [];
            while($bigData = mysqli_fetch_assoc($query)){
                $data[] = $bigData;
            }
            return $data;
        }

        public function selectt($field,$table){
            global $conn;
            $sql = "SELECT $field FROM $table";
            $query = mysqli_query($conn,$sql);
            $data = [];
            while($bigData = mysqli_fetch_assoc($query)){
                $data[] = $bigData;
            }
            return $data;
        }
        
        function query($query){
            global $conn;
            $result = mysqli_query($conn,$query);
            $rows = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $rows[] = $row;
            }
            return $rows;
        }

        public function autokode($table,$field,$pre){
            global $conn;
            $sqlc   = "SELECT COUNT($field) as jumlah FROM $table";
            $querys = mysqli_query($conn,$sqlc);
            $number = mysqli_fetch_assoc($querys);
            if($number['jumlah'] > 0){
                $sql    = "SELECT MAX($field) as kode FROM $table";
                $query  = mysqli_query($conn,$sql);
                $number = mysqli_fetch_assoc($query);
                $strnum = substr($number['kode'], 2,3);
                $strnum = $strnum + 1;
                if(strlen($strnum) == 3){ 
                    $kode = $pre.$strnum;
                }else if(strlen($strnum) == 2){ 
                    $kode = $pre."0".$strnum;
                }else if(strlen($strnum) == 1){ 
                    $kode = $pre."00".$strnum;
                }
            }else{
                $kode = $pre."001";
            }

            return $kode;
        }
    }
 ?>