<?php

namespace LaravelViews\UI;

class Header
{
    /** @var string Header's title to be shown */
    public $title;

    /** @var string Field the table view will be sort by */
    public $sortBy;

    /** @var string Width the width of the table column */
    public $width;

    /**
     * @var
     * Danh sách class style
     */
    public $thStyle;

    /**
     * Sets the header's title
     * @param string $title Header's title to be shown
     */
    public function title(string $title)
    {
        $header = new static;
        $header->title = $title;

        return $header;
    }

    public function thStyle($class){
        $this->thStyle = $class;
        return $this;
    }

    /**
     * Sets the sort by field
     * @param string $field Field the table view will be sort by
     * @return Header
     */
    public function sortBy(string $field)
    {
        $this->sortBy = $field;

        return $this;
    }

    /**
     * Checks if this header is sortable
     * @return bool
     * @return Header
     */
    public function isSortable(): bool
    {
        return !empty($this->sortBy);
    }

    /**
     * Sets a fixed width of the column
     * @return Header
     */
    public function width(string $width)
    {
        $this->width = $width;

        return $this;
    }
}
