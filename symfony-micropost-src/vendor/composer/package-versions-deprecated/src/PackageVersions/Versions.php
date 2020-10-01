<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99@c8c9aa8a14cc3d3bec86d0a8c3fa52ea79936855',
  'doctrine/annotations' => '1.10.4@bfe91e31984e2ba76df1c1339681770401ec262f',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '2.13.3@f3812c026e557892c34ef37f6ab808a6b567da7f',
  'doctrine/dbal' => '2.11.1@6e6903cd5e3a5be60a79439e3ee8fe126f78fe86',
  'doctrine/doctrine-bundle' => '2.1.2@f5153089993e1230f5d8acbd8e126014d5a63e17',
  'doctrine/doctrine-migrations-bundle' => '2.2.0@5efa29df768abaafe29b34e73dac68efbedcaa4d',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '1.4.3@4650c8b30c753a76bf44fb2ed00117d6f367490c',
  'doctrine/instantiator' => '1.3.1@f350df0268e904597e3bd9c4685c53e0e333feea',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '2.2.1@a3987131febeb0e9acb3c47ab0df0af004588934',
  'doctrine/orm' => 'v2.7.3@d95e03ba660d50d785a9925f41927fef0ee553cf',
  'doctrine/persistence' => '1.3.8@7a6eac9fb6f61bba91328f15aa7547f4806ca288',
  'doctrine/reflection' => '1.2.1@55e71912dfcd824b2fdd16f2d9afe15684cfce79',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'egulias/email-validator' => '2.1.22@68e418ec08fbfc6f58f6fd2eea70ca8efc8cc7d5',
  'laminas/laminas-code' => '3.4.1@1cb8f203389ab1482bf89c0e70a04849bacd7766',
  'laminas/laminas-eventmanager' => '3.3.0@1940ccf30e058b2fd66f5a9d696f1b5e0027b082',
  'laminas/laminas-zendframework-bridge' => '1.1.1@6ede70583e101030bcace4dcddd648f760ddf642',
  'monolog/monolog' => '2.1.1@f9eee5cec93dfb313a38b6b288741e84e53f02d5',
  'nikic/php-parser' => 'v4.10.2@658f1be311a230e0907f5dfe0213742aff0596de',
  'ocramius/proxy-manager' => '2.8.0@ac1dd414fd114cfc0da9930e0ab46063c2f5e62a',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'sensio/framework-extra-bundle' => 'v5.6.1@430d14c01836b77c28092883d195a43ce413ee32',
  'swiftmailer/swiftmailer' => 'v6.2.3@149cfdf118b169f7840bbe3ef0d4bc795d1780c9',
  'symfony/apache-pack' => 'v1.0.1@3aa5818d73ad2551281fc58a75afd9ca82622e6c',
  'symfony/asset' => 'v5.0.11@aaf4ba865c02f6df999166a0148d56f2b11b11fb',
  'symfony/cache' => 'v5.0.11@5da40a385c8182d18f4cca960bce7191c8f24e07',
  'symfony/cache-contracts' => 'v2.2.0@8034ca0b61d4dd967f3698aaa1da2507b631d0cb',
  'symfony/config' => 'v5.0.11@2306321ef6a21a0de51a139774b6b7b38804815b',
  'symfony/console' => 'v5.0.11@95794074741645473221fb126d5cb4057ad25bf1',
  'symfony/dependency-injection' => 'v5.0.11@9263d52372205c57823bf983bc4f413378830757',
  'symfony/doctrine-bridge' => 'v5.0.11@e2ab3fe26133c5d997684f1b961acbd6b04e2805',
  'symfony/dotenv' => 'v5.0.11@efd887f012127acad22325d109fe8ddf635f1f97',
  'symfony/error-handler' => 'v5.0.11@d01fba9a55614a1addb0d52d6a9566560b2a2af8',
  'symfony/event-dispatcher' => 'v5.0.11@5c5dd86c7a7962d28c48351c7dd83c9266e4d19d',
  'symfony/event-dispatcher-contracts' => 'v2.2.0@0ba7d54483095a198fa51781bc608d17e84dffa2',
  'symfony/expression-language' => 'v5.0.11@31ea3085d94d2656a3560ba303e0e27456c5d265',
  'symfony/filesystem' => 'v5.0.11@6edf8b9e64e662fcde20ee3ee2ec46fdcc8c3214',
  'symfony/finder' => 'v5.0.11@127bccabf3c854625af9c0162779cf06bc1dd352',
  'symfony/flex' => 'v1.9.4@115e67f76ba95d70946a6e0b15d4578bf04927c3',
  'symfony/form' => 'v5.0.11@7c4aee4717558389cbfea35fa84d8dd830965db1',
  'symfony/framework-bundle' => 'v5.0.11@0fc0a93f8bbe465d0b483e21b087d432baa92c16',
  'symfony/http-client' => 'v5.0.11@9eec6ed50ea38f562ce0a1fc8a7d96a010d58509',
  'symfony/http-client-contracts' => 'v2.2.0@3a5d0fe7908daaa23e3dbf4cee3ba4bfbb19fdd3',
  'symfony/http-foundation' => 'v5.0.11@7ad89bbacd90f7bee1a57e61ed5ecaeaba430706',
  'symfony/http-kernel' => 'v5.0.11@410ce82fbbb06fb926ecaacea8b0af86bc3e7ef2',
  'symfony/inflector' => 'v5.0.11@7eff2643934179cd0e5a6609a583fc22fc495fc4',
  'symfony/intl' => 'v5.0.11@72cfa77bde9d3fdb97eaf04933951d87f999d774',
  'symfony/mailer' => 'v5.0.11@ae0579ff80c1f9b6db5a7a7053733b2568cb9001',
  'symfony/maker-bundle' => 'v1.21.1@da629093c7bf9abd9a6a0f232a43bbb1b88de68d',
  'symfony/mime' => 'v5.0.11@aa2b2013a8d380e3980a29a79cc0fbcfb02fb920',
  'symfony/monolog-bridge' => 'v5.0.11@d48bf711b47c6fa9a0df747a73ad4d45d8fc5409',
  'symfony/monolog-bundle' => 'v3.5.0@dd80460fcfe1fa2050a7103ad818e9d0686ce6fd',
  'symfony/notifier' => 'v5.0.11@e5d0bb4a54509f817814cb4f267c8426e65396e4',
  'symfony/options-resolver' => 'v5.0.11@9f39c468be4b6dae1bad2422f98bab65734055e2',
  'symfony/orm-pack' => 'v1.2.0@21ac491414b5815e5ebb7425908c1d1568d2e775',
  'symfony/polyfill-intl-grapheme' => 'v1.18.1@b740103edbdcc39602239ee8860f0f45a8eb9aa5',
  'symfony/polyfill-intl-icu' => 'v1.18.1@4e45a6e39041a9cc78835b11abc47874ae302a55',
  'symfony/polyfill-intl-idn' => 'v1.18.1@5dcab1bc7146cf8c1beaa4502a3d9be344334251',
  'symfony/polyfill-intl-normalizer' => 'v1.18.1@37078a8dd4a2a1e9ab0231af7c6cb671b2ed5a7e',
  'symfony/polyfill-mbstring' => 'v1.18.1@a6977d63bf9a0ad4c65cd352709e230876f9904a',
  'symfony/polyfill-php73' => 'v1.18.1@fffa1a52a023e782cdcc221d781fe1ec8f87fcca',
  'symfony/polyfill-php80' => 'v1.18.1@d87d5766cbf48d72388a9f6b85f280c8ad51f981',
  'symfony/process' => 'v5.0.11@f1052340d8832a5ee55f4160e651a88219a1499e',
  'symfony/property-access' => 'v5.0.11@fdc47c3780ebb29077c3421c6253ccc91040c24a',
  'symfony/property-info' => 'v5.0.11@ab2210c90e8038ffaad09fe10cf635ad31bebb62',
  'symfony/routing' => 'v5.0.11@1369ee6823074c406815b65a40d47fd5ee48e517',
  'symfony/security-bundle' => 'v5.0.11@8e8b20291be3b4f9aed4da706450dc355ee036ac',
  'symfony/security-core' => 'v5.0.11@4e4c76fcb091e35aca0601fc337f0c2cf76885ab',
  'symfony/security-csrf' => 'v5.0.11@155a413dc29400e74d2c06f5581da795200386c1',
  'symfony/security-guard' => 'v5.0.11@4d920d91fa44be8ebfe1a101dadde48181d8a4fb',
  'symfony/security-http' => 'v5.0.11@e18913e3663dde1d4712c921211d12185c323c6e',
  'symfony/serializer' => 'v5.0.11@825b66f545da95e9bb1626d5655be6693376d52a',
  'symfony/serializer-pack' => 'v1.0.3@9bbce72dcad0cca797b678d3bfb764cf923ab28a',
  'symfony/service-contracts' => 'v2.2.0@d15da7ba4957ffb8f1747218be9e1a121fd298a1',
  'symfony/stopwatch' => 'v5.0.11@fbc3084469450c6f6616f5436a00e180ea9ff118',
  'symfony/string' => 'v5.0.11@d9090857c51a0ded54a54a9ed1121af24f0322f4',
  'symfony/swiftmailer-bundle' => 'v3.5.0@9f86d0f6eb787c4ce422ca428c5305c0067b8798',
  'symfony/translation' => 'v5.0.11@762090e92d8df2b91cace8930ce0329674600225',
  'symfony/translation-contracts' => 'v2.2.0@77ce1c3627c9f39643acd9af086631f842c50c4d',
  'symfony/twig-bridge' => 'v5.0.11@293e5f04eee4da963686beab20960b45e4db68ad',
  'symfony/twig-bundle' => 'v5.0.11@348863cd784b10ea7e1485dc3003c738c6cdf547',
  'symfony/twig-pack' => 'v1.0.0@8b278ea4b61fba7c051f172aacae6d87ef4be0e0',
  'symfony/validator' => 'v5.0.11@9084a603e998e7abb010c44f8e3a2046b61fa9f6',
  'symfony/var-dumper' => 'v5.0.11@36d19dbb4b377273dddb820adcdf0cc9dcf57731',
  'symfony/var-exporter' => 'v5.0.11@b87e3aeedb74ee2694932d04153df9d804954cc3',
  'symfony/web-link' => 'v5.0.11@1b2e3621074e65632f9690c4d0cb59da8e71b4fc',
  'symfony/webpack-encore-bundle' => 'v1.7.3@5c0f659eceae87271cce54bbdfb05ed8ec9007bd',
  'symfony/yaml' => 'v5.0.11@29b60e88ff11a45b708115004fdeacab1ee3dd5d',
  'twig/extra-bundle' => 'v3.0.5@a7c5799cf742ab0827f5d32df37528ee8bf5a233',
  'twig/twig' => 'v3.0.5@9b76b1535483cdf4edf01bb787b0217b62bd68a5',
  'webimpress/safe-writer' => '2.1.0@5cfafdec5873c389036f14bf832a5efc9390dcdd',
  'webmozart/assert' => '1.9.1@bafc69caeb4d49c39fd0779086c03a3738cbb389',
  'doctrine/data-fixtures' => '1.4.4@16a03fadb5473f49aad70384002dfd5012fe680e',
  'doctrine/doctrine-fixtures-bundle' => '3.3.2@a2179f447425d9e784fb9bc224e533a0ab083b98',
  'symfony/browser-kit' => 'v5.0.11@c46b676a993cc437bafe6fe0f30f074857cde2a6',
  'symfony/css-selector' => 'v5.0.11@79c224cdbfae58d54b257a8c684ad445042c90f2',
  'symfony/debug-bundle' => 'v5.0.11@4bae28a913fa32ec123a37b3178b7b7d3a4ac323',
  'symfony/debug-pack' => 'v1.0.8@7310a66f9f81c9f292ff9089f0b0062386cb83fb',
  'symfony/dom-crawler' => 'v5.0.11@bbc756c0895d08a1e69a59d8541a647b47f5a732',
  'symfony/phpunit-bridge' => 'v5.1.6@6753ea4cb2dab705e819b1ddd8833a5c98338650',
  'symfony/profiler-pack' => 'v1.0.5@29ec66471082b4eb068db11eb4f0a48c277653f7',
  'symfony/test-pack' => 'v1.0.6@ff87e800a67d06c423389f77b8209bc9dc469def',
  'symfony/web-profiler-bundle' => 'v5.0.11@3b6dbd2cc76275e117d5c55923c7f511ead22bae',
  'paragonie/random_compat' => '2.*@919a2988a93af89e2b375ebc91fd1421e53915c8',
  'symfony/polyfill-ctype' => '*@919a2988a93af89e2b375ebc91fd1421e53915c8',
  'symfony/polyfill-iconv' => '*@919a2988a93af89e2b375ebc91fd1421e53915c8',
  'symfony/polyfill-php72' => '*@919a2988a93af89e2b375ebc91fd1421e53915c8',
  'symfony/polyfill-php71' => '*@919a2988a93af89e2b375ebc91fd1421e53915c8',
  'symfony/polyfill-php70' => '*@919a2988a93af89e2b375ebc91fd1421e53915c8',
  'symfony/polyfill-php56' => '*@919a2988a93af89e2b375ebc91fd1421e53915c8',
  '__root__' => 'dev-master@919a2988a93af89e2b375ebc91fd1421e53915c8',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
