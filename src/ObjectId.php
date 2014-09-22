<?php
namespace Dkd\PhpCmis;

/**
 * This file is part of php-cmis-lib.
 *
 * (c) Sascha Egerer <sascha.egerer@dkd.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * ObjectId
 */
class ObjectId implements ObjectIdInterface
{
    /**
     * @var string
     */
    protected $id;

    /**
     * {@inheritdoc}
     */
    public function __construct($id)
    {
        if (empty($id) || !is_string($id)) {
            throw new \InvalidArgumentException('Id must not be empty!');
        }
        $this->id = $id;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return (string) $this->getId();
    }
}
