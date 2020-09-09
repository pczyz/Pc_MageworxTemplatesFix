<?php
declare(strict_types=1);

namespace Pc\MageworxTemplatesFix\Plugin\Model\ResourceModel;

use Magento\Store\Model\Store;
use MageWorx\SeoXTemplates\Model\ResourceModel\Category;

class CategoryPlugin
{
    /**
     * @param Category $category
     * @param bool|string|array $result
     * @param int $magentoentityId
     * @param int|string|array $magentoattribute atrribute's ids or codes
     * @param int|Store $magentostore
     * @return bool|string|array
     */
    public function afterGetAttributeRawValue(
        Category $category,
        $result,
        $magentoentityId,
        $magentoattribute,
        $magentostore
    ) {
        if ($magentoattribute === 'path' && $result === false) {
            return ['path' => ''];
        }
    }
}
