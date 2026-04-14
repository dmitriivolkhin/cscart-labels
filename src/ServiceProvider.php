<?php

namespace Tygh\Addons\Labels;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Tygh\Addons\Labels\Product\Labels\Repository as LabelRepository;
use Tygh\Addons\Labels\Product\Repository as ProductRepository;
use Tygh\Addons\ProductVariations\Tools\QueryFactory;
use Tygh\Tygh;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * @inheritDoc
     */
    public function register(Container $app)
    {
        $app['addons.labels.tools.query_factory'] = function (Container $app) {
            return new QueryFactory($app['db']);
        };

        $app['addons.labels.repository'] = function (Conteiner $app){
            return new LabelRepository(self::getQueryFactory(), DEFAULT_LANGUAGE);
        };

        $app['addons.labels.product.repository'] = function (Conteiner $app){
            return new ProductRepository(self::getQueryFactory(), DEFAULT_LANGUAGE);
        };

        $app['addons.labels.service'] = function (Container $app) {
            return new Service(
                self::getProductRepository(),
                self::getLabelRepository()
            );
        };
    }

    /**
     * @return Service
     */
    public static function getService()
    {
        return Tygh::$app['addons.labels.service'];
    }

    /**
     * @return QueryFactory
     */
    public static function getQueryFactory()
    {
        return Tygh::$app['addons.labels.tools.query_factory'];
    }

    /**
     * @return ProductRepository
     */
    public static function getProductRepository()
    {
        return Tygh::$app['addons.labels.product.repository'];
    }

    /**
     * @return LabelRepository
     */
    public static function getLabelRepository()
    {
        return Tygh::$app['addons.labels.repository'];
    }
}