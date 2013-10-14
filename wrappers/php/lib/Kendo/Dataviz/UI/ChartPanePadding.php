<?php

namespace Kendo\Dataviz\UI;

class ChartPanePadding extends \kendo\SerializableObject {
//>> Properties

    /**
    * The bottom padding of the chart panes.
    * @param float $value
    * @return \Kendo\Dataviz\UI\ChartPanePadding
    */
    public function bottom($value) {
        return $this->setProperty('bottom', $value);
    }

    /**
    * The left padding of the chart panes.
    * @param float $value
    * @return \Kendo\Dataviz\UI\ChartPanePadding
    */
    public function left($value) {
        return $this->setProperty('left', $value);
    }

    /**
    * The right padding of the chart panes.
    * @param float $value
    * @return \Kendo\Dataviz\UI\ChartPanePadding
    */
    public function right($value) {
        return $this->setProperty('right', $value);
    }

    /**
    * The top padding of the chart panes.
    * @param float $value
    * @return \Kendo\Dataviz\UI\ChartPanePadding
    */
    public function top($value) {
        return $this->setProperty('top', $value);
    }

//<< Properties
}

?>
