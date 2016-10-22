<?php

namespace WebSiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LeadRecruiter
 *
 * @ORM\Table(name="lead_recruiter")
 * @ORM\Entity(repositoryClass="WebSiteBundle\Repository\LeadRecruiterRepository")
 */
class LeadRecruiter
{
  /**
   * @var int
   *
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @var string
   *
   * @ORM\Column(name="name", type="string", length=255)
   */
  private $name;

  /**
   * @var string
   *
   * @ORM\Column(name="email", type="string", length=255)
   */

   private $email;

   /**
    * @var string
    *
    * @ORM\Column(name="cargo", type="string", length=255)
    */
   private $cargo;

  /**
   * @var string
   *
   * @ORM\Column(name="location", type="string", length=255)
   */
  private $company;

  /**
   * @var string
   *
   * @ORM\Column(name="phone", type="string", length=255)
   */
  private $phone;

  /**
   * @var string
   *
   * @ORM\Column(name="message", type="text")
   */
  private $message;

  /**
   * @var string
   *
   * @ORM\Column(name="typo", type="string", length=255)
   */
  private $typo;



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return LeadRecruiter
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set company
     *
     * @param string $company
     *
     * @return LeadRecruiter
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set sector
     *
     * @param string $sector
     *
     * @return LeadRecruiter
     */
    public function setSector($sector)
    {
        $this->sector = $sector;

        return $this;
    }

    /**
     * Get sector
     *
     * @return string
     */
    public function getSector()
    {
        return $this->sector;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return LeadRecruiter
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set cargo
     *
     * @param string $cargo
     *
     * @return LeadRecruiter
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get cargo
     *
     * @return string
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return LeadRecruiter
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return LeadRecruiter
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set typo
     *
     * @param string $typo
     *
     * @return LeadRecruiter
     */
    public function setTypo($typo)
    {
        $this->typo = $typo;

        return $this;
    }

    /**
     * Get typo
     *
     * @return string
     */
    public function getTypo()
    {
        return $this->typo;
    }
}
