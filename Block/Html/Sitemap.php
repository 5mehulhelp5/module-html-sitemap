<?php
declare(strict_types=1);

namespace Panth\HtmlSitemap\Block\Html;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Panth\HtmlSitemap\ViewModel\HtmlSitemap as HtmlSitemapViewModel;

class Sitemap extends Template
{
    public function __construct(
        Context $context,
        private readonly HtmlSitemapViewModel $htmlSitemap,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    public function getHtmlSitemapViewModel(): HtmlSitemapViewModel
    {
        return $this->htmlSitemap;
    }
}
