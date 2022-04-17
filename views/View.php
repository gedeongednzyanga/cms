    <?php
    class View
    {
        private $_file;
        private $_t;

        function __construct($action)
        {
            //Vérification de l'existance des fichiers
            if (file_exists('views/pages/' . strtolower($action) . '.php')) {
                $this->_file = 'views/pages/' . strtolower($action) . '.php';
            } else if (file_exists('views/admin/' . strtolower($action) . '.php')) {
                session_start();
                if (isset($_SESSION['user']) && isset($_SESSION['compte'])) {
                    $this->_file = 'views/admin/' . strtolower($action) . '.php';
                } else {
                    $action = 'login';
                    $this->_file = 'views/admin/' . strtolower($action) . '.php';
                }
            }
        }

        //Recuperation du fichier et les données avec la fonction generateFile dans le dossier views
        private function generateFile($file, $data)
        {
            if (file_exists($file)) {
                extract($data);
                //Mise en tempo avec ob_start();
                ob_start();
                require $file;
                //Arret de la temporisation avec ob_get_clean()
                return ob_get_clean();
            } else
                throw new Exception('Fichier ' . $file . ' introuvable.');
        }

        //Fonction pour recuperer les pages sans charger les donnees depuis la bd
        private function generateFile1($file)
        {
            if (file_exists($file)) {
                //Mise en tempo avec ob_start();
                ob_start();
                require $file;
                //Arret de la temporisation avec ob_get_clean()
                return ob_get_clean();
            } else
                throw new Exception('Fichier ' . $file . ' introuvable.');
        }

        //Generation de la view Avec donnees
        public function generate($data)
        {
            $content = $this->generateFile($this->_file, $data);
            $view = $this->generateFile('views/template.php', array('t' => $this->_t, 'content' => $content));
            echo $view;
        }

        //Generation de la view sans donnees
        public function generate1()
        {
            $content = $this->generateFile1($this->_file);
            echo $content;
        }
    }