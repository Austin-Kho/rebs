<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if (config('database.default') !== 'splite') {
            DB::statement('SET FOREIGN_KEY_CHECKS=0');
        }

        if (config('app.env') === 'local') {

            // $this->call(UsersTableSeeder::class);

            DB::table('rebs_banks')->truncate();

            DB::table('rebs_banks')->insert(['bank_code' => '001', 'bank_name' => '한국은행']);
            DB::table('rebs_banks')->insert(['bank_code' => '002', 'bank_name' => '산업은행']);
            DB::table('rebs_banks')->insert(['bank_code' => '003', 'bank_name' => '기업은행']);
            DB::table('rebs_banks')->insert(['bank_code' => '004', 'bank_name' => '국민은행']);
            DB::table('rebs_banks')->insert(['bank_code' => '007', 'bank_name' => '수협은행']);
            DB::table('rebs_banks')->insert(['bank_code' => '008', 'bank_name' => '수출입은행']);
            DB::table('rebs_banks')->insert(['bank_code' => '011', 'bank_name' => '농협은행']);
            DB::table('rebs_banks')->insert(['bank_code' => '012', 'bank_name' => '지역농축협']);
            DB::table('rebs_banks')->insert(['bank_code' => '020', 'bank_name' => '우리은행']);
            DB::table('rebs_banks')->insert(['bank_code' => '023', 'bank_name' => 'SC제일은행']);
            DB::table('rebs_banks')->insert(['bank_code' => '027', 'bank_name' => '한국씨티은행']);
            DB::table('rebs_banks')->insert(['bank_code' => '031', 'bank_name' => '대구은행']);
            DB::table('rebs_banks')->insert(['bank_code' => '032', 'bank_name' => '부산은행']);
            DB::table('rebs_banks')->insert(['bank_code' => '034', 'bank_name' => '광주은행']);
            DB::table('rebs_banks')->insert(['bank_code' => '035', 'bank_name' => '제주은행']);
            DB::table('rebs_banks')->insert(['bank_code' => '037', 'bank_name' => '전북은행']);
            DB::table('rebs_banks')->insert(['bank_code' => '039', 'bank_name' => '경남은']);
            DB::table('rebs_banks')->insert(['bank_code' => '041', 'bank_name' => '우리카드']);
            DB::table('rebs_banks')->insert(['bank_code' => '044', 'bank_name' => '외환카드']);
            DB::table('rebs_banks')->insert(['bank_code' => '045', 'bank_name' => '새마을금고중앙회']);
            DB::table('rebs_banks')->insert(['bank_code' => '048', 'bank_name' => '신협']);
            DB::table('rebs_banks')->insert(['bank_code' => '050', 'bank_name' => '저축은행']);
            DB::table('rebs_banks')->insert(['bank_code' => '052', 'bank_name' => '모건스탠리은행']);
            DB::table('rebs_banks')->insert(['bank_code' => '054', 'bank_name' => 'HSBC은행']);
            DB::table('rebs_banks')->insert(['bank_code' => '055', 'bank_name' => '도이치은행']);
            DB::table('rebs_banks')->insert(['bank_code' => '057', 'bank_name' => '제이피모간체이스은행']);
            DB::table('rebs_banks')->insert(['bank_code' => '058', 'bank_name' => '미즈호은행']);
            DB::table('rebs_banks')->insert(['bank_code' => '059', 'bank_name' => '엠유에프지은행']);
            DB::table('rebs_banks')->insert(['bank_code' => '060', 'bank_name' => 'BOA은행']);
            DB::table('rebs_banks')->insert(['bank_code' => '061', 'bank_name' => '비엔피파리바은행']);
            DB::table('rebs_banks')->insert(['bank_code' => '062', 'bank_name' => '중국공상은행']);
            DB::table('rebs_banks')->insert(['bank_code' => '063', 'bank_name' => '중국은행']);
            DB::table('rebs_banks')->insert(['bank_code' => '064', 'bank_name' => '산립조합중앙회']);
            DB::table('rebs_banks')->insert(['bank_code' => '065', 'bank_name' => '대화은행']);
            DB::table('rebs_banks')->insert(['bank_code' => '066', 'bank_name' => '교통은행']);
            DB::table('rebs_banks')->insert(['bank_code' => '067', 'bank_name' => '중국건설은행']);
            DB::table('rebs_banks')->insert(['bank_code' => '071', 'bank_name' => '우체국']);
            DB::table('rebs_banks')->insert(['bank_code' => '076', 'bank_name' => '신용보증기금']);
            DB::table('rebs_banks')->insert(['bank_code' => '077', 'bank_name' => '기술보증기금']);
            DB::table('rebs_banks')->insert(['bank_code' => '081', 'bank_name' => 'KEB하나은행']);
            DB::table('rebs_banks')->insert(['bank_code' => '088', 'bank_name' => '신한은행']);
            DB::table('rebs_banks')->insert(['bank_code' => '089', 'bank_name' => '케이뱅크']);
            DB::table('rebs_banks')->insert(['bank_code' => '090', 'bank_name' => '카카오뱅크']);
            DB::table('rebs_banks')->insert(['bank_code' => '101', 'bank_name' => '한국신용정보원']);
            DB::table('rebs_banks')->insert(['bank_code' => '102', 'bank_name' => '대신저축은행']);
            DB::table('rebs_banks')->insert(['bank_code' => '103', 'bank_name' => '에스비아이저축은행']);
            DB::table('rebs_banks')->insert(['bank_code' => '104', 'bank_name' => '에이치케이저축은행']);
            DB::table('rebs_banks')->insert(['bank_code' => '105', 'bank_name' => '웰컴저축은행']);
            DB::table('rebs_banks')->insert(['bank_code' => '106', 'bank_name' => '신한저축은행']);
            DB::table('rebs_banks')->insert(['bank_code' => '209', 'bank_name' => '유안타증권']);
            DB::table('rebs_banks')->insert(['bank_code' => '218', 'bank_name' => 'KB증권']);
            DB::table('rebs_banks')->insert(['bank_code' => '221', 'bank_name' => '상상인증권']);
            DB::table('rebs_banks')->insert(['bank_code' => '222', 'bank_name' => '한양증권']);
            DB::table('rebs_banks')->insert(['bank_code' => '223', 'bank_name' => '리딩투자증권']);
            DB::table('rebs_banks')->insert(['bank_code' => '224', 'bank_name' => 'BNK투자증권']);
            DB::table('rebs_banks')->insert(['bank_code' => '225', 'bank_name' => 'IBK투자증권']);
            DB::table('rebs_banks')->insert(['bank_code' => '227', 'bank_name' => 'KTB투자증권']);
            DB::table('rebs_banks')->insert(['bank_code' => '238', 'bank_name' => '미래에셋대우']);
            DB::table('rebs_banks')->insert(['bank_code' => '240', 'bank_name' => '삼성증권']);
            DB::table('rebs_banks')->insert(['bank_code' => '243', 'bank_name' => '한국투자증권']);
            DB::table('rebs_banks')->insert(['bank_code' => '247', 'bank_name' => 'NH투자증권']);
            DB::table('rebs_banks')->insert(['bank_code' => '261', 'bank_name' => '교보증권']);
            DB::table('rebs_banks')->insert(['bank_code' => '262', 'bank_name' => '하이투자증권']);
            DB::table('rebs_banks')->insert(['bank_code' => '263', 'bank_name' => '현대차증권']);
            DB::table('rebs_banks')->insert(['bank_code' => '264', 'bank_name' => '키움증권']);
            DB::table('rebs_banks')->insert(['bank_code' => '265', 'bank_name' => '이베스트투자증권']);
            DB::table('rebs_banks')->insert(['bank_code' => '266', 'bank_name' => 'SK증권']);
            DB::table('rebs_banks')->insert(['bank_code' => '267', 'bank_name' => '대신증권']);
            DB::table('rebs_banks')->insert(['bank_code' => '269', 'bank_name' => '한화투자증권']);
            DB::table('rebs_banks')->insert(['bank_code' => '270', 'bank_name' => '하나금융투자']);
            DB::table('rebs_banks')->insert(['bank_code' => '278', 'bank_name' => '신한금융투자']);
            DB::table('rebs_banks')->insert(['bank_code' => '279', 'bank_name' => 'DB금융투자']);
            DB::table('rebs_banks')->insert(['bank_code' => '280', 'bank_name' => '유진투자증권']);
            DB::table('rebs_banks')->insert(['bank_code' => '287', 'bank_name' => '메리츠종합금융증권']);
            DB::table('rebs_banks')->insert(['bank_code' => '288', 'bank_name' => '바로투자증권']);
            DB::table('rebs_banks')->insert(['bank_code' => '290', 'bank_name' => '부국증권']);
            DB::table('rebs_banks')->insert(['bank_code' => '291', 'bank_name' => '신영증권']);
            DB::table('rebs_banks')->insert(['bank_code' => '292', 'bank_name' => '케이프투자증권']);
            DB::table('rebs_banks')->insert(['bank_code' => '293', 'bank_name' => '한국증권금융']);
            DB::table('rebs_banks')->insert(['bank_code' => '294', 'bank_name' => '한국포스증권']);
            DB::table('rebs_banks')->insert(['bank_code' => '295', 'bank_name' => '우리종합금융']);
            DB::table('rebs_banks')->insert(['bank_code' => '299', 'bank_name' => '아주캐피탈']);
            DB::table('rebs_banks')->insert(['bank_code' => '361', 'bank_name' => 'BC카드']);
            DB::table('rebs_banks')->insert(['bank_code' => '364', 'bank_name' => '광주카드']);
            DB::table('rebs_banks')->insert(['bank_code' => '365', 'bank_name' => '삼성카드']);
            DB::table('rebs_banks')->insert(['bank_code' => '366', 'bank_name' => '신한카드']);
            DB::table('rebs_banks')->insert(['bank_code' => '367', 'bank_name' => '현대카드']);
            DB::table('rebs_banks')->insert(['bank_code' => '368', 'bank_name' => '롯데카드']);
            DB::table('rebs_banks')->insert(['bank_code' => '369', 'bank_name' => '수협카드']);
            DB::table('rebs_banks')->insert(['bank_code' => '370', 'bank_name' => '씨티카드']);
            DB::table('rebs_banks')->insert(['bank_code' => '371', 'bank_name' => 'NH카드']);
            DB::table('rebs_banks')->insert(['bank_code' => '372', 'bank_name' => '전북카드']);
            DB::table('rebs_banks')->insert(['bank_code' => '373', 'bank_name' => '제주카드']);
            DB::table('rebs_banks')->insert(['bank_code' => '374', 'bank_name' => '하나SK카드']);
            DB::table('rebs_banks')->insert(['bank_code' => '381', 'bank_name' => 'KB국민카드']);
            DB::table('rebs_banks')->insert(['bank_code' => '431', 'bank_name' => '미래에셋생명']);
            DB::table('rebs_banks')->insert(['bank_code' => '432', 'bank_name' => '한화생명']);
            DB::table('rebs_banks')->insert(['bank_code' => '433', 'bank_name' => '교보라이프플래닛생명']);
            DB::table('rebs_banks')->insert(['bank_code' => '434', 'bank_name' => '푸본현대생명']);
            DB::table('rebs_banks')->insert(['bank_code' => '435', 'bank_name' => '라이나생명']);
            DB::table('rebs_banks')->insert(['bank_code' => '436', 'bank_name' => '교보생명']);
            DB::table('rebs_banks')->insert(['bank_code' => '437', 'bank_name' => '에이비엘생명']);
            DB::table('rebs_banks')->insert(['bank_code' => '438', 'bank_name' => '신한생명']);
            DB::table('rebs_banks')->insert(['bank_code' => '439', 'bank_name' => 'KB생명보험']);
            DB::table('rebs_banks')->insert(['bank_code' => '440', 'bank_name' => '농협생명']);
            DB::table('rebs_banks')->insert(['bank_code' => '441', 'bank_name' => '삼성화재']);
            DB::table('rebs_banks')->insert(['bank_code' => '442', 'bank_name' => '현대해상']);
            DB::table('rebs_banks')->insert(['bank_code' => '443', 'bank_name' => 'DB손해보험']);
            DB::table('rebs_banks')->insert(['bank_code' => '444', 'bank_name' => 'KB손해보험']);
            DB::table('rebs_banks')->insert(['bank_code' => '445', 'bank_name' => '롯데손해보험']);
            DB::table('rebs_banks')->insert(['bank_code' => '446', 'bank_name' => '오렌지라이프생명보험']);
            DB::table('rebs_banks')->insert(['bank_code' => '447', 'bank_name' => '악사손해보험']);
            DB::table('rebs_banks')->insert(['bank_code' => '448', 'bank_name' => '메리츠화재']);
            DB::table('rebs_banks')->insert(['bank_code' => '449', 'bank_name' => '농협손해보험']);
            DB::table('rebs_banks')->insert(['bank_code' => '450', 'bank_name' => '푸르덴셜생명보험']);
            DB::table('rebs_banks')->insert(['bank_code' => '452', 'bank_name' => '삼성생명']);
            DB::table('rebs_banks')->insert(['bank_code' => '453', 'bank_name' => '흥국생명']);
            DB::table('rebs_banks')->insert(['bank_code' => '454', 'bank_name' => '한화손해보험']);
            DB::table('rebs_banks')->insert(['bank_code' => '455', 'bank_name' => 'AIA생명보험']);
            DB::table('rebs_banks')->insert(['bank_code' => '456', 'bank_name' => 'DGB생명보험']);
            DB::table('rebs_banks')->insert(['bank_code' => '457', 'bank_name' => 'DB생명보험']);
            DB::table('rebs_banks')->insert(['bank_code' => '458', 'bank_name' => 'KDB생명보험']);
        }

        if (config('database.default') !== 'splite') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1');
        }
    }
}
