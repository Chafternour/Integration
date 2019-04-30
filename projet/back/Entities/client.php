<?PHP
class client{
	private $cin;
	private $nom;
	private $prenom;
	private $sexe;
	private $date_n;
	private $adresse_m;
	private $adresse;
	private $numero;
	private $mot_d_p;
	private $points_f;
	private $grad_fk;

	
	function __construct($cin,$nom,$prenom,$sexe,$date_n,$adresse_m,$adresse,$numero,$mot_d_p,$points_f,$grad_fk){
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->sexe=$sexe;
		$this->date_n=$date_n;
		$this->adresse_m=$adresse_m;
		$this->adresse=$adresse;
		$this->numero=$numero;
		$this->mot_d_p=$mot_d_p;
		$this->points_f=$points_f;
		$this->grad_fk=$grad_fk;
		
		

	}
	
	function getcin(){
		return $this->cin;
	}
	function getnom(){
		return $this->nom;
	}
	function getprenom(){
		return $this->prenom;
	}
	function getsexe(){
		return $this->sexe;
	}
	function getdate(){
		return $this->date_n;
	}
    function getadressem(){
		return $this->adresse_m;
	}
	function getadresse(){
		return $this->adresse;
	}
	function getnumero(){
		return $this->numero;
	}
	function getmotdp(){
		return $this->mot_d_p;
	}
	function getpointf(){
		return $this->points_f;
	}
	function getgradfk(){
		return $this->grad_fk;
	}
	

	
	
}

?>