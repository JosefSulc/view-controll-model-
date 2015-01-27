<?php
class db extends mysqli
{
    public function login()
    {
        $username = $this->real_escape_string($_POST['username']);
        $password = $this->real_escape_string(md5($_POST['password']));

        $user = $this->query('SELECT id FROM users WHERE username="'.$username.'" AND password="'.$password.'"');
        if ($user->num_rows)
        {
            session::logged();
            return true;
        } else {
            return false;
        }
    }

    public function render()
    {
        $result = $this->query('SELECT * FROM notes');
        echo '<table>
                <tr>
                    <th id="id">ID</th>
                    <th id="note">NOTE</th>
                    <th id="timestamp">TIMESTAMP</th>
                </tr>';
        while($row = $result->fetch_array(MYSQLI_ASSOC))
        {
            echo '<tr>
                    <td>'.$row['id'].'</td>
                    <td class="notes">'.$row['notes'].'</td>
                    <td>'.$row['timestamp'].'</td>
                  </tr>';
        }
        echo '</table>';


    }



    public function add()
    {
        //INSERT INTO notes (notes) VALUES ("hello")
        $note = $this->real_escape_string(trim($_POST['note']));
        $this->query('INSERT INTO notes (notes) VALUES ("'.$note.'")');
        unset($_POST['note']);
    }

    public function remove()
    {
        $id = $this->real_escape_string($_POST['id']);
        $this->query('DELETE FROM notes WHERE id='.$id.'');
        unset($_POST['id']);
    }

    public function modify()
    {
        $note = $this->real_escape_string(trim($_POST['modifnote']));
        $this->query('UPDATE notes SET notes="'.$note.'" WHERE id='.$_POST['modifid'].'');
        unset($_POST['modifid']);
        unset($_POST['modifnote']);
    }

}

class session {

    public static $running = false;

    public static function init()
    {
        session_start();
        session::$running = true;
    }

    public static function destroy()
    {
        unset($_SESSION['logged']);
        session_destroy();
    }

    public static function logged()
    {
        $_SESSION['logged'] = true;
    }
}