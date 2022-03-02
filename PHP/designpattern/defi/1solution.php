<?php

/**
 * Class Notification.
 */
abstract class Notification
{
    // Tout type de notification doit implémenter une méthode send()
    abstract protected function send(string $recipient, string $message);

    public function manageNotification($recipient, $message)
    {
        $this->send($recipient, $message);
    }
}

/**
 * Class EmailNotification.
 */
class EmailNotification extends Notification
{
    protected function send(string $recipient, string $message)
    {
        echo sprintf('Email envoyé au %s contenant le message %s  <br/>', $recipient, $message);
    }
}

/**
 * Class SMSNotification.
 */
class SMSNotification extends Notification
{
    protected function send(string $recipient, string $message)
    {
        echo sprintf('SMS envoyé au %s contenant le message %s <br/>', $recipient, $message);
    }
}

/**
 * Class NotificationFactory.
 */
class NotificationFactory
{
    // La mise en place du modèle Factory permettra de futures évolutions

    /**
     * @return EmailNotification|SMSNotification
     */
    public static function createNotification(string $contactType)
    {
        switch ($contactType) {
            case 'sms':
                return new SMSNotification();
                break;
            case 'email':
            default:
                return new EmailNotification();
        }
    }
}

/**
 * Class Client.
 */
class Client
{
    public $name;
    public $contactWith;
    public $email;
    public $phoneNumber;

    public function __construct(string $name, string $contactBy, string $email, string $phoneNumber)
    {
        $this->name = $name;
        $this->contactWith = $contactBy;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
    }

    public function getContactInformation()
    {
        switch ($this->contactWith) {
            case 'sms':
                return $this->phoneNumber;
                break;
            case 'email':
            default:
                return $this->email;
                break;
        }
    }
}

$message = 'Commande expédiée';
$clientsToNotifyToNotify = [];

$clientsToNotify[] = new Client('Karine', 'email', 'karine@mail.fr', '01.02.03.04.05.06');
$clientsToNotify[] = new Client('Julien', 'sms', 'julien@mail.fr', '01.02.03.04.05.07');
$clientsToNotify[] = new Client('Karim', 'sms', 'karim@mail.fr', '01.02.03.04.05.08');
$clientsToNotify[] = new Client('Justine', 'email', 'justine@mail.fr', '01.02.03.04.05.09');

foreach ($clientsToNotify as $client) {
    $notification = NotificationFactory::createNotification($client->contactWith);
    $notification->manageNotification($client->getContactInformation(), $message);
}
