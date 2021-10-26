<?php
namespace Mselbach\StaticInfoTablesRu\Updates;

use TYPO3\CMS\Install\Updates\DatabaseUpdatedPrerequisite;
use TYPO3\CMS\Install\Updates\UpgradeWizardInterface;
use SJBR\StaticInfoTables\Utility\DatabaseUpdateUtility;
use SJBR\StaticInfoTables\Cache\ClassCacheManager;

class ImportStaticDataUpdateWizard implements UpgradeWizardInterface {

    protected DatabaseUpdateUtility $databaseUpdateUtility;
    protected ClassCacheManager $classCacheManager;

    public function __construct(
        DatabaseUpdateUtility $databaseUpdateUtility,
        ClassCacheManager $classCacheManager
    )
    {
        $this->databaseUpdateUtility = $databaseUpdateUtility;
        $this->classCacheManager = $classCacheManager;
    }

    public function getIdentifier(): string
    {
        return 'staticInfoTablesRu_importStaticData';
    }

    public function getTitle(): string
    {
        return 'Import static data for RU';
    }

    public function getDescription(): string
    {
        return 'Import data for static_info_tables_ru';
    }

    public function executeUpdate(): bool
    {
        $this->classCacheManager->reBuild();

        $this->databaseUpdateUtility->doUpdate('static_info_tables_ru');

        return true;
    }

    public function updateNecessary(): bool
    {
        return true;
    }

    public function getPrerequisites(): array
    {
        return [
            DatabaseUpdatedPrerequisite::class
        ];
    }
}
