-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Počítač: localhost
-- Vytvořeno: Úte 27. led 2015, 17:22
-- Verze serveru: 5.6.16
-- Verze PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databáze: `elextern`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `ex_comment`
--

CREATE TABLE IF NOT EXISTS `ex_comment` (
  `comment_id` int(11) NOT NULL COMMENT 'Comment ID',
  `author_name` varchar(255) COLLATE utf8_czech_ci DEFAULT NULL COMMENT 'Comment Author',
  `author_email` varchar(255) COLLATE utf8_czech_ci DEFAULT NULL COMMENT 'Author Email',
  `comment_text` text COLLATE utf8_czech_ci COMMENT 'Comment Text',
  `reply_id` int(11) DEFAULT NULL COMMENT 'Reply to comment ID?',
  `visible` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'Visible?',
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Added',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Last Changed',
  `ip` varchar(255) COLLATE utf8_czech_ci DEFAULT NULL COMMENT 'IP Address',
  `user_agent` varchar(255) COLLATE utf8_czech_ci DEFAULT NULL COMMENT 'Browser User Agent'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci COMMENT='List of public comments on ELEXTERN page';

--
-- Vypisuji data pro tabulku `ex_comment`
--

INSERT INTO `ex_comment` (`comment_id`, `author_name`, `author_email`, `comment_text`, `reply_id`, `visible`, `added`, `timestamp`, `ip`, `user_agent`) VALUES
(1, 'Jakub Rychecký', 'jakub@rychecky.cz', 'Welcome to the comments of future!', NULL, 1, '2015-01-06 13:48:23', '2015-01-06 13:48:23', '193.84.170.93', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:34.0) Gecko/20100101 Firefox/34.0'),
(2, 'Frédéric Wertz', 'frederic.wertz@cvrez.cz', 'Nice job guys :)\r\n I still don''t understand all this stuff, hoping you add more description ASAP', NULL, 1, '2015-01-06 14:19:54', '2015-01-06 14:19:54', '193.84.175.205', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:34.0) Gecko/20100101 Firefox/34.0'),
(3, 'Lucka', '', 'Ahoj Frede, vypadá to moc dobře. Lucka', NULL, 1, '2015-01-09 11:33:51', '2015-01-09 11:33:51', '193.84.175.205', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0)'),
(4, 'Ondra Z', 'ondra.zlamal@gmail.com', 'Yay, I am in! :) \r\nNeat, but the registration sucks. ', NULL, 1, '2015-01-16 09:24:32', '2015-01-21 07:36:39', '89.111.73.140', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36'),
(5, 'Andrew Akin', 'aakin@dufrane.com', 'Ahoj! Congratulations on the progress', NULL, 1, '2015-01-21 07:34:54', '2015-01-21 07:34:54', '98.22.254.26', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36');

-- --------------------------------------------------------

--
-- Struktura tabulky `ex_default`
--

CREATE TABLE IF NOT EXISTS `ex_default` (
  `row_id` int(11) NOT NULL COMMENT 'Row_id',
  `category` varchar(512) COLLATE utf8_czech_ci NOT NULL COMMENT 'Category of value',
  `name` varchar(512) COLLATE utf8_czech_ci NOT NULL COMMENT 'Name of value',
  `value` varchar(64) COLLATE utf8_czech_ci DEFAULT NULL COMMENT 'Value',
  `note` text COLLATE utf8_czech_ci COMMENT 'Won''t display on web',
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Added',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Changed'
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci COMMENT='List of default values of tune-up factors';

--
-- Vypisuji data pro tabulku `ex_default`
--

INSERT INTO `ex_default` (`row_id`, `category`, `name`, `value`, `note`, `added`, `timestamp`) VALUES
(1, 'DataImpact', 'eco_decomissioning_weight', '100', NULL, '2014-12-22 20:05:19', '2014-12-22 20:05:19'),
(2, 'DataImpact', 'eco_technology_import_weight', '100', NULL, '2014-12-22 20:05:19', '2014-12-22 20:05:19'),
(3, 'DataImpact', 'eco_fossil_fuel_weight', '100', NULL, '2014-12-22 20:05:19', '2014-12-22 20:05:19'),
(4, 'DataImpact', 'env_compensation', '100000', NULL, '2014-12-22 20:05:19', '2014-12-22 20:05:19'),
(5, 'DataImpact', 'soc_sick_leave', '45.6', NULL, '2014-12-22 20:05:19', '2014-12-22 20:05:19'),
(6, 'DataImpact', 'soc_respiratory', '377', NULL, '2014-12-22 20:05:19', '2014-12-22 20:05:19'),
(7, 'DataImpact', 'soc_cancer', '30000', NULL, '2014-12-22 20:05:19', '2014-12-22 20:05:19'),
(8, 'DataImpact', 'soc_mortality', '2000000', NULL, '2014-12-22 20:05:19', '2014-12-22 20:05:19'),
(9, 'DataImpact', 'lt_nuclear_waste_treatment', '3', NULL, '2014-12-22 20:05:19', '2014-12-22 20:05:19'),
(10, 'DataImpact', 'lt_climate_start', '35', NULL, '2014-12-22 20:05:19', '2014-12-22 20:05:19'),
(11, 'DataImpact', 'lt_climate_cost', '3', NULL, '2014-12-22 20:05:19', '2014-12-22 20:05:19'),
(12, 'DataAdditional', 'world_gdp', '56000', NULL, '2014-12-22 20:05:19', '2014-12-22 20:05:19'),
(13, 'DataAdditional', 'inhabitable_surface', '107', NULL, '2014-12-22 20:05:19', '2014-12-22 20:05:19'),
(14, 'DataAdditional', 'carbon_budget', '700', NULL, '2014-12-22 20:05:19', '2014-12-22 20:05:19'),
(15, 'DataAdditional', 'nuclear_exclusion', '30', NULL, '2014-12-22 20:05:19', '2014-12-22 20:05:19'),
(16, 'DataAdditional', 'nuclear_accident', '36125', NULL, '2014-12-22 20:05:19', '2014-12-22 20:05:19'),
(17, 'DataAdditional', 'loc_population', '134', NULL, '2014-12-22 20:05:19', '2014-12-22 20:05:19'),
(18, 'DataAdditional', 'loc_surface_lignite', '21', NULL, '2014-12-22 20:05:19', '2014-12-22 20:05:19'),
(19, 'DataAdditional', 'loc_solar_density', '100', NULL, '2014-12-22 20:05:19', '2014-12-22 20:05:19'),
(20, 'DataEnergyUnit', 'oil_price', '83.16', NULL, '2014-12-22 20:05:19', '2014-12-22 20:05:19'),
(21, 'DataEnergyUnit', 'oil_toe', '0.1364', NULL, '2014-12-22 20:05:19', '2014-12-22 20:05:19'),
(22, 'DataEnergyUnit', 'oil_co2', '3.07', NULL, '2014-12-22 20:05:19', '2014-12-22 20:05:19'),
(23, 'DataEnergyUnit', 'gas_price', '7', NULL, '2014-12-22 20:05:19', '2014-12-22 20:05:19'),
(24, 'DataEnergyUnit', 'gas_toe', '40', NULL, '2014-12-22 20:05:19', '2014-12-22 20:05:19'),
(25, 'DataEnergyUnit', 'gas_co2', '2.35', NULL, '2014-12-22 20:05:19', '2014-12-22 20:05:19'),
(26, 'DataEnergyUnit', 'coal_price', '63.14', NULL, '2014-12-22 20:05:19', '2014-12-22 20:05:19'),
(27, 'DataEnergyUnit', 'coal_toe', '1.5', NULL, '2014-12-22 20:05:19', '2014-12-22 20:05:19'),
(28, 'DataEnergyUnit', 'coal_co2', '3.96', NULL, '2014-12-22 20:05:19', '2014-12-22 20:05:19'),
(29, 'DataEnergyUnit', 'lignite_price', '21', NULL, '2014-12-22 20:05:19', '2014-12-22 20:05:19'),
(30, 'DataEnergyUnit', 'lignite_toe', '3', NULL, '2014-12-22 20:05:19', '2014-12-22 20:05:19'),
(31, 'DataEnergyUnit', 'lignite_co2', '3.96', NULL, '2014-12-22 20:05:19', '2014-12-22 20:05:19'),
(32, 'DataEnergyUnit', 'mwh_toe', '11.7', NULL, '2014-12-22 20:05:19', '2014-12-22 20:05:19'),
(33, 'DataMain', 'time_horizon', '300', NULL, '2014-12-22 20:22:30', '2014-12-22 20:22:30'),
(34, 'DataMain', 'discount_rate', '3', NULL, '2014-12-22 20:22:30', '2014-12-22 20:26:59');

-- --------------------------------------------------------

--
-- Struktura tabulky `ex_item`
--

CREATE TABLE IF NOT EXISTS `ex_item` (
  `row_id` int(11) NOT NULL COMMENT 'Record ID',
  `item_id` varchar(256) COLLATE utf8_czech_ci NOT NULL COMMENT 'ID of item',
  `name` varchar(512) COLLATE utf8_czech_ci DEFAULT NULL COMMENT 'Full name of item',
  `name_short` varchar(512) COLLATE utf8_czech_ci DEFAULT NULL COMMENT 'Shorter name of item',
  `description` text COLLATE utf8_czech_ci COMMENT 'Text description of item',
  `unit` varchar(128) COLLATE utf8_czech_ci DEFAULT NULL COMMENT 'Units of item (i.e. €/MWh)',
  `icon` varchar(256) COLLATE utf8_czech_ci DEFAULT NULL COMMENT 'FontAwesome icon',
  `note` text COLLATE utf8_czech_ci COMMENT 'Note (doesn''t display)',
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Added',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Last Changed'
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci COMMENT='List of items with their tooltip and units';

--
-- Vypisuji data pro tabulku `ex_item`
--

INSERT INTO `ex_item` (`row_id`, `item_id`, `name`, `name_short`, `description`, `unit`, `icon`, `note`, `added`, `timestamp`) VALUES
(1, 'construction_time', 'Construction Time', 'CT', 'Time before the power plant operates.', 'years', NULL, NULL, '2014-12-20 18:05:47', '2014-12-20 18:07:29'),
(2, 'capex', 'CAPEX', NULL, 'CAPital EXpenditures: Investment costs.', '€/kW', NULL, NULL, '2014-12-20 18:06:23', '2015-01-21 09:27:13'),
(3, 'capex_idr', 'CAPEX IDR', NULL, 'Assuming Investment costs are linearly spent during the power plant construction time, CAPEX IDR represents CAPEX Including Discount Rate', '€/kW', NULL, NULL, '2014-12-20 18:07:10', '2015-01-21 07:45:21'),
(4, 'grid_connection', 'Grid Connection', NULL, 'Costs for connecting the power plant to the grid.', '€/kW', NULL, NULL, '2014-12-31 02:37:43', '2014-12-31 02:37:51'),
(5, 'lifetime', 'Lifetime', 'LT', 'During which the power plant can produce electricity.', 'years', NULL, NULL, '2014-12-31 02:45:47', '2014-12-31 02:45:47'),
(6, 'opex', 'Operation OPEX%', '', 'OPeration EXpenditures. Share of CAPEX costs that are due every year for maintenance (fixed costs even without production).', '% CAPEX', NULL, NULL, '2014-12-31 02:45:47', '2015-01-21 09:27:45'),
(7, 'fuel', 'Fuel', '', 'Cost of fuel used in the power plant for producing electricity (variable cost during production only)', '', NULL, NULL, '2014-12-31 02:45:47', '2014-12-31 02:45:47'),
(8, 'capex_actual', 'Actual CAPEX', '', 'Discounted investment costs per produced MWh over the power plant lifetime and given Discount Rate and Load Factor', '', NULL, NULL, '2014-12-31 02:45:47', '2014-12-31 02:45:47'),
(9, 'opex_actual', 'Actual OPEX', '', 'Operation costs per produced MWh given Load Factor LF', '', NULL, NULL, '2014-12-31 02:45:47', '2014-12-31 02:45:47'),
(10, 'lcoe', 'Levelised Costs Of Electricity', 'LCOE', 'Levelised Costs Of Electricity', '', NULL, NULL, '2014-12-31 02:45:47', '2014-12-31 02:45:47'),
(11, 'flexibility_yield', 'Flexibility Yield', '', 'interpolated according to ELIX index (Electricity spot price for France-Germany-Austria-Switzerland market)', '', NULL, NULL, '2014-12-31 02:45:48', '2014-12-31 02:45:48'),
(12, 'net_cost', 'Net cost', '', 'Net cost of the electricity (LCOE-Flexibility Yield)', '', NULL, NULL, '2014-12-31 02:45:48', '2014-12-31 02:45:48'),
(13, 'impact_economic', 'Economic impact', '', 'Computes all kind of monetary losses for the local economy: Technology and/or fuel imports from abroad since they don''t benefit local population (no jobs). Also fossil fuel depletion is a loss, and future decomissionning costs are a burden for future generations.', '', NULL, NULL, '2014-12-31 02:45:48', '2014-12-31 02:45:48'),
(14, 'impact_social', 'Social Impact', '', 'Computes all kind of health impacts (diseases and deaths) induced by air-pollution or radiations. As these problems are managed by health insurance systems and not by the first polluer, these costs must appear clearly', '', NULL, NULL, '2014-12-31 02:45:48', '2014-12-31 02:45:48'),
(15, 'impact_environment', 'Environmental impact', '', 'Computes the ecological footprint of technologies based on Life cycle assessment: land lost per year of operation for mining and installing facilities, no man''s land from nuclear incidents, and all related expulsions. Since there is no economy without Earth, Every destroyed land destroyed its surface share on GDP.', '', NULL, NULL, '2014-12-31 02:45:48', '2015-01-21 14:48:50'),
(16, 'impact_longterm', 'Long-term Impact', '', 'Global climate change (high momentum) and nuclear waste storage (very-long timescales involved) are here considered to impact future generations in the long-term', '', NULL, NULL, '2014-12-31 02:45:48', '2015-01-21 07:52:18'),
(17, 'cost_externality', 'Externalities Costs', '', 'Total costs of externalities (not included in the LCOE but paid by the society or impacting future generations)', '', NULL, NULL, '2014-12-31 02:45:48', '2014-12-31 02:45:48'),
(18, 'cost_reference', 'Reference Costs', '', 'Total electricity costs (LCOE+externalities)', '', NULL, NULL, '2014-12-31 02:45:48', '2014-12-31 02:45:48'),
(19, 'dispatchability', 'Yield-Dispatchable source?', '', 'If the power technology can be activated "on demand" or not, and at which frequency, 1-Annual, 2-Daily', '', NULL, NULL, '2014-12-31 02:45:48', '2014-12-31 02:45:48'),
(20, 'impact_economic_decomissioning', 'Decomissionning', '', 'Costs for dismantling the plant after operation', '% CAPEX', NULL, NULL, '2014-12-31 02:45:48', '2014-12-31 02:47:02'),
(21, 'impact_economic_decomissioning_actual', 'Actual Decomissioning costs', '', 'Net to present value of costs required to dismantle the plant after operation', '€', NULL, NULL, '2014-12-31 02:45:48', '2014-12-31 02:47:04'),
(22, 'impact_economic_foreign_purchases', 'Share of foreign purchases', '', 'Share of CAPEX that does not benefit the local economy', '% CAPEX', NULL, NULL, '2014-12-31 02:45:48', '2014-12-31 02:47:07'),
(23, 'impact_economic_technology_actual', 'Actual Technology imports', '', 'Total value of imports not benefiting the local economy', '€', NULL, NULL, '2014-12-31 02:45:48', '2015-01-21 07:54:39'),
(24, 'impact_economic_efficiency', 'Efficiency', '', 'Efficiency of the power plant, needed to compute the Fuel costs for Thermal power plants', '', NULL, NULL, '2014-12-31 02:45:48', '2015-01-21 07:56:02'),
(25, 'impact_economic_fossil', 'Fossil Fuel?', '', 'Total value of depleted domestic fossil fuels no longer valuable for future generations', '', NULL, NULL, '2014-12-31 02:45:48', '2015-01-21 07:56:14'),
(26, 'impact_social_sick_leaves', 'Sick leaves', '', 'Lost working days', 'Days', NULL, NULL, '2014-12-31 02:45:48', '2014-12-31 02:47:20'),
(27, 'impact_social_respiratory', 'Respiratory Diseases', '', 'Respiratory diseases due to air pollution from burning fuels', 'Diseases', NULL, NULL, '2014-12-31 02:45:48', '2014-12-31 02:47:23'),
(28, 'impact_social_cancer', 'Cancers', '', 'Cancers due to irradiation from nuclear materials manipulation incidents', 'Cancers', NULL, NULL, '2014-12-31 02:45:48', '2014-12-31 02:47:26'),
(29, 'impact_social_mortality', 'Mortality', '', 'Average deaths per use of Technology (any cause)', 'Deaths', NULL, NULL, '2014-12-31 02:45:48', '2014-12-31 02:47:28'),
(30, 'impact_environment_extended_land_use', 'Extended Land Use', '', 'Extended land use for the installations and upstream activities (mining) leading to loss of biodiversity and the free services offered by nature', 'm2*yr', NULL, NULL, '2014-12-31 02:45:48', '2015-01-21 07:58:36'),
(31, 'impact_environment_expulsion', 'Compensations for Expulsions', '', 'In case of not-planned evacuation (Nuclear incident) compensations are due to expelled people for their new accomodation', 'people', NULL, NULL, '2014-12-31 02:45:48', '2015-01-21 07:58:13'),
(32, 'impact_longterm_nuclear_waste', 'Nuclear Wastes Treatment', '', 'in % of fuel pre-treatment per year. Indeed post treatment of nuclear wastes will require day-to-day cares similar to initial fuel processing for more than centuries', '', NULL, NULL, '2014-12-31 02:45:48', '2014-12-31 02:47:38'),
(33, 'impact_longterm_climate_change', 'Climate Change start ST / cost', '', 'When do we expect climate change impacts to signigicantly affect our lifes / in World GDP% per year. Indeed climate change adaptation will be a day-to-day fight that will cost the global economy some %GDP every year and last for more than centuries', '', NULL, NULL, '2014-12-31 02:45:48', '2015-01-21 08:00:19'),
(34, 'impact_longterm_co2', 'CO2eq emissions', '', 'Average CO2 emissions per MWh due to fossil fuel burning and construction works', 't', NULL, NULL, '2014-12-31 02:45:48', '2014-12-31 02:47:46'),
(35, 'co2_cost', 'CO2 yearly costs, CAPEX% (vs OPEX%)', '', 'Indeed climate change adaptation will be a day-to-day fight that will cost the global economy some %GDP every year and last for more than centuries', '€/t/year', NULL, NULL, '2014-12-31 02:45:48', '2014-12-31 02:45:48'),
(36, 'marginal_costs', 'Marginal Costs', '', '', '€/MWh', NULL, NULL, '2014-12-31 02:45:48', '2014-12-31 02:45:48'),
(37, 'load_factor', 'Load Factor', 'LF', 'Represents the ratio of the produced electricity by its potential, were the technology be used at its nominal power during the whole year. It is lower than 100% for the following reasons:- maintenance works during which the power plant does not produce- decrease of the production to adapt to low demand- non-availability of renewable sources (absence of light or wind)', '%', NULL, NULL, '2014-12-31 02:45:48', '2015-01-21 08:08:36'),
(38, 'installed_capacity', 'Installed Capacity', '', '', 'MW', NULL, NULL, '2014-12-31 02:45:48', '2014-12-31 02:45:48'),
(39, 'produced_energy', 'Produced Energy', '', '', 'MW/year', NULL, NULL, '2014-12-31 02:45:48', '2014-12-31 02:45:48'),
(40, 'discount_rate', 'Discrount Rate', 'R', 'Represents the "preference for present". = Return on investments for a company. = Interest rate for a Bank. = GDP growth for a country', '%', 'fa-line-chart', NULL, '2014-12-31 18:36:27', '2015-01-21 08:02:15'),
(41, 'time_horizon', 'Time Horizon', 'TH', 'Up to which extent shall we be neutral (responsible) for future generations concerning our todays'' energy choices. ', NULL, 'fa-clock-o', NULL, '2014-12-31 18:38:30', '2014-12-31 18:38:30');

-- --------------------------------------------------------

--
-- Struktura tabulky `ex_source`
--

CREATE TABLE IF NOT EXISTS `ex_source` (
  `source_id` int(11) NOT NULL COMMENT 'Source ID',
  `show_order` int(11) NOT NULL DEFAULT '100' COMMENT 'Order of source display',
  `name` varchar(1024) COLLATE utf8_czech_ci DEFAULT NULL COMMENT 'Article or book name',
  `magazine` varchar(1024) COLLATE utf8_czech_ci DEFAULT NULL COMMENT 'Magazine name and release (optional)',
  `author` varchar(1024) COLLATE utf8_czech_ci DEFAULT NULL COMMENT 'Authors or organization',
  `url` varchar(1024) COLLATE utf8_czech_ci DEFAULT NULL COMMENT 'URL (optional)',
  `note` text COLLATE utf8_czech_ci COMMENT 'Note (doesn''t display)',
  `visible` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'Is visible?',
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Added',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Last change'
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci COMMENT='List of literatures sources of data';

--
-- Vypisuji data pro tabulku `ex_source`
--

INSERT INTO `ex_source` (`source_id`, `show_order`, `name`, `magazine`, `author`, `url`, `note`, `visible`, `added`, `timestamp`) VALUES
(1, 1, 'Projected Costs of Generating Electricity 2010', NULL, 'International Energy Agency and Organisation for Economic Co-operation and Development (IEA/OECD)', 'http://iea.org/publications/freepublications/publication/projected_costs.pdf', NULL, 1, '2014-12-31 09:34:17', '2014-12-31 10:07:07'),
(2, 2, 'Sustainable Energy in America 2013 Factbook', NULL, 'Bloomberg new Energy finance', 'http://about.bnef.com/white-papers/sustainable-energy-in-america-2013-factbook/', NULL, 1, '2014-12-31 09:34:17', '2014-12-31 09:34:29'),
(3, 3, 'Pricing environmental externalities in the power sector: ethical limits and implication for social choice', 'Ecological Economics 2003;46:333-50', 'Söderholm P, Sundqvist T. ', 'http://dx.doi.org/10.1016/S0921-8009(03)00185-X', NULL, 1, '2014-12-31 09:34:17', '2014-12-31 09:34:17'),
(4, 4, 'Electricity generation and health', ' Lancet 2007;370:979-90', 'Markandya A, Wikinson P', 'http://dx.doi.org/10.1016/S0140-6736(07)61253-7', NULL, 1, '2014-12-31 09:34:17', '2014-12-31 09:34:17'),
(5, 5, 'Total gross electricity generation 2014', NULL, 'Czech Transmission System Operator (ČEPS)', 'http://ceps.cz/ENG/Data/Vsechna-data/Pages/Vyroba.aspx', NULL, 1, '2014-12-31 09:34:17', '2014-12-31 10:07:46'),
(6, 6, 'Europe in figures', NULL, 'Eurostat', 'http://ec.europa.eu/eurostat/guip/introAction.do?profile=cpro&theme=eurind%3C=en', NULL, 1, '2014-12-31 09:34:17', '2014-12-31 10:59:31'),
(7, 7, 'Economic information on health care 2011', NULL, 'Ústav zdravotnických informací a statistiky České republiky (ÚZIS ČR)', 'http://uzis.cz/system/files/ekinf2011.pdf', NULL, 1, '2014-12-31 09:34:17', '2014-12-31 10:07:13'),
(8, 8, 'Czech Health Statistics 2012', NULL, 'Ústav zdravotnických informací a statistiky České republiky (ÚZIS ČR)', 'http://uzis.cz/system/files/zdrroccz2012.pdf', NULL, 1, '2014-12-31 09:34:17', '2014-12-31 10:07:17'),
(9, 9, 'Are estimates of the value of a statistical life exaggerated?', 'Journal of Health Economics 2012;31:197-206. ', 'Doucouliagos C, Standley TD, Giles M.', 'http://dx.doi.org/10.1016/j.jhealeco.2011.10.001', NULL, 1, '2014-12-31 09:34:17', '2014-12-31 09:34:17'),
(10, 10, 'Statistical Review of World Energy 2014', '', 'BP', 'http://bp.com/statisticalreview', NULL, 1, '2014-12-31 09:34:17', '2014-12-31 10:07:21'),
(11, 11, 'The value of the world''s ecosystem services and natural capital', 'Nature 1997;387:253-260', 'Costanza R, d’Arge R, de Groot R, Farber S, Grasso M, Hannon B, Limburg K, Naeem S, O’Neill RV, Paruelo J, Raskin RG, Sutton P, van den Belt M.', 'http://dx.doi.org/10.1038/387253a0', NULL, 1, '2014-12-31 09:34:17', '2014-12-31 09:34:17'),
(12, 12, 'Fifth Assessment Report (AR5), Working Group I (WGI). Climate Change 2013: The Physical Science Basis', NULL, 'Intergovernmental Panel on Climate Change (IPCC)', 'http://climatechange2013.org/images/report/WG1AR5_SPM_FINAL.pdf', NULL, 1, '2014-12-31 09:34:17', '2014-12-31 10:06:40'),
(13, 13, 'Greenhouse-gas emission targets for limiting global warming to 2 °C', 'Nature 2009;458:1158-62', 'Meinshausen M, Meinshausen N, Hare W, Raper SCB., Frieler K, Knutti R, Frame DJ, Allen MR.', 'http://dx.doi.org/10.1038/nature08017', NULL, 1, '2014-12-31 09:34:17', '2014-12-31 09:34:17'),
(14, 14, 'Internalization of External Costs of Energy Generation in Central and Eastern European Countries. ', 'Journal of Environment & Development 2012;21:181-197', 'Máca V, Melichar J, Ščasný M.', 'http://dx.doi.org/10.1177/1070496512442504', NULL, 1, '2014-12-31 09:34:17', '2014-12-31 09:34:17'),
(15, 15, 'The Ramsey Discounting Formula for a Hidden State Stochastic Growth Process', 'Environ Resource Econ 2012;53:309-21', 'Weitzman ML.', 'http://dx.doi.org/10.1007/s10640-012-9594-y', NULL, 1, '2014-12-31 09:34:17', '2014-12-31 09:34:17');

-- --------------------------------------------------------

--
-- Struktura tabulky `ex_tech`
--

CREATE TABLE IF NOT EXISTS `ex_tech` (
  `row_id` int(11) NOT NULL COMMENT 'Record ID',
  `model` varchar(32) NOT NULL COMMENT 'Name of calculation model',
  `technology` varchar(2500) DEFAULT NULL COMMENT 'Technology name for display',
  `country_code` varchar(10) DEFAULT NULL COMMENT 'ISO 3166-1 alpha-2',
  `construction_time` float DEFAULT NULL COMMENT 'Construction time CT',
  `capex` float DEFAULT NULL COMMENT 'CAPEX',
  `grid_connection` float DEFAULT NULL COMMENT 'Grid Connection',
  `lifetime` float DEFAULT NULL COMMENT 'Lifetime',
  `opex` float DEFAULT NULL COMMENT 'OPEX (% of CAPEX)',
  `dispatchable` int(1) DEFAULT NULL COMMENT 'Dispatchability',
  `eco_decomissionning` float DEFAULT NULL COMMENT 'ECO Decomissionning ',
  `eco_foreign_purchases` float DEFAULT NULL COMMENT 'ECO Share of foreign purchases',
  `eco_efficiency` float DEFAULT NULL COMMENT 'ECO Eco efficiency',
  `eco_fossil_fuel` tinyint(1) DEFAULT NULL COMMENT 'ECO Fossil Fuel?',
  `soc_sick_leave` float DEFAULT NULL COMMENT 'SOC Sick Leaves',
  `soc_respiratory` float DEFAULT NULL COMMENT 'SOC Respiratory Diseases',
  `soc_cancer` float DEFAULT NULL COMMENT 'SOC Cancers',
  `soc_mortality` float DEFAULT NULL COMMENT 'SOC Mortality',
  `env_land_use` float DEFAULT NULL COMMENT 'ENV extended land use',
  `lt_co2` float DEFAULT NULL COMMENT 'CO2eq Emissions',
  `load_factor` float DEFAULT NULL COMMENT 'Load Factor',
  `capacity_reference` float NOT NULL COMMENT 'Reference Capacity',
  `capacity_installed` float NOT NULL COMMENT 'Installed Capacity (MW)',
  `learning_potential` float NOT NULL COMMENT 'Learning/potential exponent',
  `source` varchar(255) DEFAULT NULL COMMENT 'Source',
  `show_order` int(11) NOT NULL DEFAULT '1' COMMENT 'Show order on website',
  `show_demo` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Is shown in demo?',
  `visible` tinyint(1) DEFAULT '1' COMMENT 'Visible?',
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Added',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Changed'
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COMMENT='List of electrict technologies for website';

--
-- Vypisuji data pro tabulku `ex_tech`
--

INSERT INTO `ex_tech` (`row_id`, `model`, `technology`, `country_code`, `construction_time`, `capex`, `grid_connection`, `lifetime`, `opex`, `dispatchable`, `eco_decomissionning`, `eco_foreign_purchases`, `eco_efficiency`, `eco_fossil_fuel`, `soc_sick_leave`, `soc_respiratory`, `soc_cancer`, `soc_mortality`, `env_land_use`, `lt_co2`, `load_factor`, `capacity_reference`, `capacity_installed`, `learning_potential`, `source`, `show_order`, `show_demo`, `visible`, `added`, `timestamp`) VALUES
(1, 'TechModelLigniteIGCC', 'Lignite LF 42%', 'CZ', 4, 3176.28, 100, 40, 1.65, 1, 5, 15, 45, 1, 0.282816, 0.017676, NULL, 0.0000326, NULL, NULL, 42, 10814, 10628, 0, 'OECD 2010 – CZ', 2, 1, 1, '2014-09-05 13:24:42', '2015-01-27 15:06:07'),
(2, 'TechModelLigniteCCS', 'Lignite + CCS', 'CZ', 4, 4262.24, 100, 40, 1.46, 1, 5, 30, 43, 1, 0.028272, 0.001767, NULL, 0.00000326, NULL, NULL, 85, 0, 0, 0, 'OECD 2010 - CZ', 1, 0, 0, '2014-09-07 21:34:43', '2015-01-27 14:22:12'),
(3, 'TechModelGasCCGT', 'Gas LF 21%', 'CZ', 2, 1069.64, 50, 30, 1.76, 1, 5, 15, 57, 1, 0.011248, 0.000703, NULL, 0.0000028, NULL, NULL, 21, 1349, 1146, 0, 'OECD 2010 - CZ', 3, 1, 1, '2014-09-07 21:39:11', '2015-01-27 15:06:49'),
(4, 'TechModelBiomass', 'FBC Biomass', 'CZ', 4, 2509.2, 100, 30, 1.85, 1, 5, 15, 42, 0, 0.036416, 0.002276, NULL, 0.00000463, NULL, 0.007, 85, 0.1, 1, 0, 'OECD 2010 - CZ', 4, 0, 1, '2014-09-07 21:41:50', '2015-01-27 15:11:11'),
(5, 'TechModelHydroSmall', 'Small Hydro', 'CZ', 2, 7886.64, 100, 80, 0.32, 0, 5, 15, 90, 0, NULL, NULL, NULL, NULL, NULL, 0.006, 45, 290, 429, 0.1, 'OECD 2010 - CZ', 9, 1, 1, '2014-09-07 21:47:29', '2015-01-27 15:14:22'),
(6, 'TechModelNuclearGen2', 'Nuclear Gen II', 'CZ', 7, 3983.44, 200, 60, 1.87, 1, 15, 30, 35, 1, 0.0000396, NULL, 0.00000022, 0.000000074, NULL, 0.006, 85, 4300, 4040, 0, 'OECD 2010 - CZ', 5, 1, 1, '2014-09-07 22:31:22', '2015-01-27 15:13:52'),
(7, 'TechModelGeothermal', 'Geo-thermal', 'CZ', 2, 8763.16, 100, 40, 1.76, 1, 5, 15, 80, 0, NULL, NULL, NULL, NULL, NULL, 0.007, 70, 0, 0, 0, 'OECD 2010 - CZ', 14, 0, 0, '2014-09-07 22:33:08', '2015-01-27 14:22:27'),
(8, 'TechModelWindOnshore', 'Onshore Wind', 'CZ', 1, 755.4, 230, 25, 2, 0, -20, 50, 50, 0, NULL, NULL, NULL, NULL, NULL, 0.007, 15, 274, 223, -0.1, 'Bloomberg 2013 - CZ', 10, 1, 1, '2014-09-07 22:35:10', '2015-01-27 15:11:59'),
(9, 'TechModelSolarLand', 'PV Land', 'CZ', 1, 1359.71, 380, 25, 0.71, 0, -20, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, 0.055, 12, 1829, 1775, -0.25, 'Bloomberg 2013 - CZ', 12, 1, 1, '2014-09-07 22:37:42', '2015-01-27 15:12:30'),
(10, 'TechModelGasCHP', 'Gas CHP', 'CZ', 2, 1254.6, 50, 30, 1.76, 1, 5, 15, 55, 1, 0.011248, 0.000703, NULL, 0.0000028, NULL, NULL, 21, 0, 0, 0, 'OECD 2010 – CZ', 1, 0, 0, '2014-09-12 19:02:32', '2015-01-27 14:22:48'),
(11, 'TechModelLignitePCC', 'Lignite PCC', 'CZ', 4, 2368.8, 100, 40, 1.65, 1, 5, 15, 43, 1, 0.282816, 0.017676, NULL, 0.0000326, NULL, NULL, 85, 0, 0, 0, 'OECD 2010 – CZ', 1, 0, 0, '2014-09-12 19:11:13', '2015-01-27 14:22:51'),
(12, 'TechModelLigniteFBC', 'Lignite LF 85%', 'CZ', 4, 2369.8, 100, 40, 1.65, 1, 5, 15, 42, 1, 0.282816, 0.017676, NULL, 0.0000326, NULL, NULL, 85, 0, 0, 0, 'OECD 2010 – CZ', 1, 0, 0, '2014-09-12 21:59:07', '2015-01-27 14:22:56'),
(13, 'TechModelLigniteCHP', 'Lignite CHP', 'CZ', 4, 2509.2, 100, 30, 1.65, 1, 5, 15, 42, 1, 0.282816, 0.017676, NULL, 0.0000326, NULL, NULL, 42, 0, 0, 0, 'OECD 2010 – CZ', 1, 0, 0, '2014-09-12 22:16:28', '2015-01-27 14:22:59'),
(14, 'TechModelNuclearEPR', 'Nuclear EPR III', 'GB', 7, 5147.06, 200, 60, 1.87, 1, 15, 30, 35, 1, 0.0000396, NULL, 0.00000022, 0.000000074, NULL, 0.006, 85, 4300, 1, -0.1, 'BBC 2013 – UK', 6, 0, 1, '2014-09-12 23:41:13', '2015-01-27 15:13:16'),
(15, 'TechModelHydroLarge', 'Large Hydro', 'CZ', 3, 2321.52, 100, 80, 1.56, 1, 5, 15, 90, 0, NULL, NULL, NULL, NULL, 91, 0.006, 14, 0, 0, 0, 'OECD 2010 - SE', 7, 0, 0, '2014-09-13 11:12:51', '2015-01-27 14:23:04'),
(16, 'TechModelHydroPumped', 'Pumped Hydro', 'CZ', 3, 2321.52, 100, 80, 1.56, 2, 5, 15, 80, 0, NULL, NULL, NULL, NULL, 6.69, 0.006, 8, 0, 0, 0, 'OECD 2010 - SE', 8, 0, 0, '2014-09-13 11:29:29', '2015-01-27 14:23:07'),
(17, 'TechModelWindOffshore', 'Offshore Wind DE', 'DE', 1, 1133.09, 650, 25, 1.46, 0, -20, 15, 50, NULL, NULL, NULL, NULL, NULL, NULL, 0.014, 43, 0, 0, 0, 'Bloomberg 2013 – DE', 11, 0, 0, '2014-09-13 12:20:08', '2015-01-27 14:23:10'),
(18, 'TechModelSolarRoof', 'PV Roof IT', 'IT', 1, 2039.57, 380, 25, 1.7, 0, -20, 50, 10, NULL, NULL, NULL, NULL, NULL, NULL, 0.055, 30, 300, 1, -0.25, 'Bloomberg 2013 - IT', 13, 0, 1, '2014-09-13 12:22:35', '2015-01-27 15:11:18');

-- --------------------------------------------------------

--
-- Struktura tabulky `ex_user`
--

CREATE TABLE IF NOT EXISTS `ex_user` (
  `user_id` int(11) NOT NULL COMMENT 'User ID',
  `email` varchar(512) COLLATE utf8_czech_ci NOT NULL COMMENT 'User e-mail',
  `password` varchar(1024) COLLATE utf8_czech_ci NOT NULL COMMENT 'Password hash',
  `name` varchar(512) COLLATE utf8_czech_ci DEFAULT NULL COMMENT 'Name',
  `institution` varchar(512) COLLATE utf8_czech_ci DEFAULT NULL COMMENT 'Institution',
  `reason` text COLLATE utf8_czech_ci COMMENT 'Why do I want to use ELEXTERN?',
  `last_visit` datetime NOT NULL COMMENT 'Last visit datetime',
  `last_ip` varchar(128) COLLATE utf8_czech_ci NOT NULL COMMENT 'Last visit IP',
  `last_user_agent` varchar(512) COLLATE utf8_czech_ci NOT NULL COMMENT 'Last visit user agent',
  `note` text COLLATE utf8_czech_ci COMMENT 'Admin-only note of user',
  `admin` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Is administrator?',
  `visible` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'Visible?',
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Added (registered)',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Last changed'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci COMMENT='List of user accounts';

--
-- Vypisuji data pro tabulku `ex_user`
--

INSERT INTO `ex_user` (`user_id`, `email`, `password`, `name`, `institution`, `reason`, `last_visit`, `last_ip`, `last_user_agent`, `note`, `admin`, `visible`, `added`, `timestamp`) VALUES
(1, 'jakub.rychecky@cvrez.cz', '7406cea2574f86d606dda46b703a6bf1891a0551d0c34a946d28d25ecf1875f9$2y$10$kjdX/jtRB9io2jufbUcuX.ZSN9e8m4ArcF6EMGv1oX0DwMzexMRk.', 'Jakub', 'Rychecký', NULL, '0000-00-00 00:00:00', '', '', NULL, 1, 1, '2015-01-27 13:53:04', '2015-01-27 13:53:04');

-- --------------------------------------------------------

--
-- Struktura tabulky `ex_yield`
--

CREATE TABLE IF NOT EXISTS `ex_yield` (
  `row_id` int(11) NOT NULL COMMENT 'Record ID',
  `load_factor` float NOT NULL COMMENT 'Load Factor',
  `highest_price_y` float NOT NULL COMMENT 'Highest Prices (year)',
  `lowest_price_y` float NOT NULL COMMENT 'Lowest Prices ',
  `highest_price_d` float NOT NULL COMMENT 'Highest Prices (day)',
  `lowest_price_d` float NOT NULL COMMENT 'Lowest Prices (day)'
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='Yield table';

--
-- Vypisuji data pro tabulku `ex_yield`
--

INSERT INTO `ex_yield` (`row_id`, `load_factor`, `highest_price_y`, `lowest_price_y`, `highest_price_d`, `lowest_price_d`) VALUES
(1, 4.17, 87.1, 4, 59.6, 22.2),
(2, 8.33, 76, 9, 57.9, 23.1),
(3, 12.5, 71, 12, 56.4, 24),
(4, 16.67, 67.8, 14.8, 55.3, 24.8),
(5, 20.83, 65.4, 17, 54.3, 25.8),
(6, 25, 63.4, 19, 53.5, 27),
(7, 33.33, 60.1, 22.2, 52, 29.3),
(8, 50, 54.8, 27.1, 49.4, 33),
(9, 75, 48.2, 33.4, 45.8, 37),
(10, 91.67, 43.8, 37.8, 42.5, 40),
(11, 95.83, 42.5, 38.9, 41.7, 40.8),
(12, 100, 40.9, 40.9, 40.8, 40.8);

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `ex_comment`
--
ALTER TABLE `ex_comment`
  ADD PRIMARY KEY (`comment_id`), ADD KEY `comment` (`visible`);

--
-- Klíče pro tabulku `ex_default`
--
ALTER TABLE `ex_default`
  ADD PRIMARY KEY (`row_id`);

--
-- Klíče pro tabulku `ex_item`
--
ALTER TABLE `ex_item`
  ADD PRIMARY KEY (`row_id`);

--
-- Klíče pro tabulku `ex_source`
--
ALTER TABLE `ex_source`
  ADD PRIMARY KEY (`source_id`), ADD KEY `order` (`show_order`), ADD KEY `visible` (`visible`);

--
-- Klíče pro tabulku `ex_tech`
--
ALTER TABLE `ex_tech`
  ADD PRIMARY KEY (`row_id`), ADD KEY `country_code` (`country_code`), ADD KEY `efficiency` (`eco_efficiency`), ADD KEY `opex` (`opex`), ADD KEY `technology_id` (`model`), ADD KEY `row_id` (`row_id`);

--
-- Klíče pro tabulku `ex_user`
--
ALTER TABLE `ex_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Klíče pro tabulku `ex_yield`
--
ALTER TABLE `ex_yield`
  ADD PRIMARY KEY (`row_id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `ex_comment`
--
ALTER TABLE `ex_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Comment ID',AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pro tabulku `ex_default`
--
ALTER TABLE `ex_default`
  MODIFY `row_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Row_id',AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT pro tabulku `ex_item`
--
ALTER TABLE `ex_item`
  MODIFY `row_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Record ID',AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT pro tabulku `ex_source`
--
ALTER TABLE `ex_source`
  MODIFY `source_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Source ID',AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pro tabulku `ex_tech`
--
ALTER TABLE `ex_tech`
  MODIFY `row_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Record ID',AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pro tabulku `ex_user`
--
ALTER TABLE `ex_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'User ID',AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pro tabulku `ex_yield`
--
ALTER TABLE `ex_yield`
  MODIFY `row_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Record ID',AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
