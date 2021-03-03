<?php
declare(strict_types=1);

namespace App\Mailer;

use Cake\Mailer\Mailer;

/**
 * ContactForm mailer.
 */
class ContactFormMailer extends Mailer
{
    /**
     * Mailer's name.
     *
     * @var string
     */
    public static $name = 'ContactForm';

    public function submit(array $data)
    {
        $this->setFrom('app@domain.com', 'Bookmarks')
            ->addTo($data['email'], $data['name'])
            ->setViewVars(['content' => ['foo', 'bar']])
            ->viewBuilder()->setTemplate('default')->setLayout('default');
    }
}
