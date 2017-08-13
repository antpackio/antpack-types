<?php

namespace AntPack\DataTypes\Common;

class MetadataCollection extends ArrayCollection
{

    /**
     * @return string Type of Objects inside collection FQN
     */
    protected function typeOfCollection(): string
    {
        return Metadata::class;
    }
}
