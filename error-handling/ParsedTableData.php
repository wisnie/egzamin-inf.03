<?php
class ParsedTableData
{
    const IRREGULAR_CLASSROOM_PATTERNS = array('114k', '200_1', '200_2', '212 b1', '212 b2', '215k', '216_1', '216_2', 'Sił');
    private static function parse_cell(string $data_cell): array|bool
    {
        $pattern = '/(?<='. join('|', self::IRREGULAR_CLASSROOM_PATTERNS) .'|\d\d\d)\B/';
        return preg_split($pattern, $data_cell);
    }

    private static function parse_entry(string $entry): array
    {
        $pattern = '/\b(?='. join('|', self::IRREGULAR_CLASSROOM_PATTERNS) .'|\\d\\d\\d)/';
        [$remaining_entry, $classroom] = preg_split($pattern, $entry);
        $teacher_identifier = join(' ', array_slice(preg_split('/\s/', trim($remaining_entry)), -2, 2));
        $subject_identifier = join(' ', array_slice(preg_split('/\s/', trim($remaining_entry)), 0, -2));

        return array(
            "classroom" => $classroom,
            "teacher_identifier" => $teacher_identifier,
            "subject_identifier" => $subject_identifier
        );
    }

    // Ideally, the validation should occur in the calling function, but
    // since the const is defined in this class, it is validated here.
    private static function validate_entries(array $entries): array
    {
        $pattern = '/\b(?='. join('|', self::IRREGULAR_CLASSROOM_PATTERNS) .'|\\d\\d\\d)/';
        return array_filter($entries, fn($en) => preg_match($pattern, $en));
    }

    public static function parse_table_data(string $data_cell): array
    {
        $entries = self::parse_cell($data_cell);
        return array_map([ParsedTableData::class, 'parse_entry'], self::validate_entries($entries));
    }
}
