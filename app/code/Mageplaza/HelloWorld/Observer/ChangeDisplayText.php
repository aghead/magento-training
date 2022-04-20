<?php


namespace Mageplaza\HelloWorld\Observer;


use Magento\Framework\Event\Observer;

class ChangeDisplayText implements \Magento\Framework\Event\ObserverInterface
{

    /**
     * @param  Observer  $observer
     * @return $this|void
     */
    public function execute(Observer $observer)
    {
        $displayText = $observer->getData('mp_text');
        echo $displayText->getText() . " - Event </br>";
        $displayText->setText('Execute event successfully.');

        return $this;
    }
}
