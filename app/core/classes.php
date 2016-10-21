<?
#
# User session management class
#


class Session implements ArrayAccess
{
    private $meta = '__meta';
    private $started;

    public function __construct()
    {
        if (ini_get('session.auto_start')) {
            $this->started = true;
            $this->start();
        }
    }

    public function start()
    {
        $this->started || session_start();
        (isset($_SESSION[$this->meta]) || $this->init())
            || $_SESSION[$this->meta]['activity'] = $_SERVER['REQUEST_TIME'];
        $this->started = true;

    }

    public function commit()
    {
        session_commit();
    }

    public function destroy()
    {
        $_SESSION = array();
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        session_destroy();
    }

    public function get($name, $default = NULL)
    {
        return isset($_SESSION[$name]) ? $_SESSION[$name] : $default;
    }

    public function getName()
    {
        return session_name();
    }

    private function init()
    {
        $_SESSION[$this->meta] = array(
            'ip'       => $_SERVER['REMOTE_ADDR'],
            'name'     => session_name(),
            'created'  => $_SERVER['REQUEST_TIME'],
            'activity' => $_SERVER['REQUEST_TIME'],

        );
        return true;
    }


    public function offsetExists($offset)
    {
        $this->started || $this->start();
        return isset($_SESSION[$offset]);
    }


    public function offsetGet($offset)
    {
        $this->started || $this->start();
        return $this->get($offset);
    }

    public function offsetSet($offset, $value)
    {
        $this->started || $this->start();
        $_SESSION[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        unset($_SESSION[$offset]);
    }
}
