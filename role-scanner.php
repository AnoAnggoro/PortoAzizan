<?php
class RoleScanner {
    private $certificates = [
        'cert1' => ['title' => 'Certificate of Appreciation - Growth Hacking Summit', 'issuer' => 'Growth Hacking Summit / EPIQ / Apiary Academy', 'role' => 'Time Keeper', 'skills' => ['Growth Hacking', 'Digital Marketing', 'Business Development', 'Innovation'], 'level' => 'beginner', 'category' => 'business_development'],
        'cert2' => ['title' => 'Staff Acara - Youth Empowerment Festival', 'issuer' => 'Youth Ranger Indonesia', 'role' => 'Master of Ceremony', 'skills' => ['Public Speaking', 'Event Hosting', 'Leadership'], 'level' => 'advanced', 'category' => 'public_speaking'],
        'cert3' => ['title' => 'Certificate of Participation - Jakarta Creator Con', 'issuer' => 'Commaa Asia / Jakarta Creator Con / Slice', 'role' => 'Logistic Crew', 'skills' => ['Logistics Management', 'Event Operations', 'Team Coordination'], 'level' => 'intermediate', 'category' => 'operations'],
        'cert4' => ['title' => 'Sertifikat Apresiasi - Event #UangKita', 'issuer' => 'Komunitas #UangKita Regional Jabodetabek - Kementerian Keuangan', 'role' => 'Event Committee', 'skills' => ['Financial Literacy Event', 'Event Planning', 'Educational Programs'], 'level' => 'intermediate', 'category' => 'financial_education'],
        'cert5' => ['title' => 'Sertifikat Apresiasi - Panitia Kuliah Umum Komunita', 'issuer' => 'Kementerian Keuangan RI', 'role' => 'Event Committee', 'skills' => ['Event Management', 'Public Relations', 'Government Relations'], 'level' => 'intermediate', 'category' => 'event_management'],
        'cert6' => ['title' => 'Volunteer Community Development', 'issuer' => 'Manupsia', 'role' => 'Community Developer', 'skills' => ['Community Building', 'Social Impact', 'Program Management'], 'level' => 'intermediate', 'category' => 'community_development']
    ];
    
    public function analyzeRoles() {
        $roleCounts = $allSkills = $levelCounts = [];
        
        foreach ($this->certificates as $cert) {
            $roleCounts[$cert['category']] = ($roleCounts[$cert['category']] ?? 0) + 1;
            $levelCounts[$cert['level']] = ($levelCounts[$cert['level']] ?? 0) + 1;
            foreach ($cert['skills'] as $skill) $allSkills[$skill] = ($allSkills[$skill] ?? 0) + 1;
        }
        
        arsort($roleCounts); arsort($allSkills);
        return ['primary_roles' => array_keys($roleCounts), 'skill_matrix' => $allSkills, 'experience_level' => $levelCounts];
    }
    
    public function generateRoleReport() {
        $analysis = $this->analyzeRoles();
        return [
            'summary' => [
                'total_certificates' => count($this->certificates),
                'primary_role' => $this->getRoleName($analysis['primary_roles'][0] ?? ''),
                'strongest_skills' => array_slice(array_keys($analysis['skill_matrix']), 0, 5),
                'experience_level' => $this->determineOverallLevel($analysis['experience_level'])
            ],
            'detailed_analysis' => $analysis,
            'role_fit_score' => $this->calculateRoleFitScore($analysis)
        ];
    }
    
    private function getRoleName($category) {
        $roleNames = ['event_management' => 'Event Management Specialist', 'public_speaking' => 'Communications & Public Speaking Expert', 'community_development' => 'Community Development Specialist', 'financial_education' => 'Financial Education Coordinator', 'business_development' => 'Business Development Associate', 'operations' => 'Operations Coordinator'];
        return $roleNames[$category] ?? 'Multi-skilled Professional';
    }
    
    private function determineOverallLevel($levelCounts) {
        if (($levelCounts['advanced'] ?? 0) >= 2) return 'Advanced';
        elseif (($levelCounts['intermediate'] ?? 0) >= 3) return 'Intermediate';
        else return 'Emerging Professional';
    }
    
    private function calculateRoleFitScore($analysis) {
        $scores = [];
        $scoreMap = [
            'Event Manager' => [['event_management', 30], ['Event Management', 25], ['Public Relations', 20], ['Event Planning', 25]],
            'Communications Specialist' => [['public_speaking', 35], ['Public Speaking', 30], ['Event Hosting', 20], ['Leadership', 15]],
            'Community Relations Officer' => [['community_development', 30], ['Community Building', 25], ['Social Impact', 25], ['Program Management', 20]]
        ];
        
        foreach ($scoreMap as $role => $criteria) {
            $score = 0;
            foreach ($criteria as [$key, $value]) {
                if (in_array($key, $analysis['primary_roles']) || isset($analysis['skill_matrix'][$key])) $score += $value;
            }
            $scores[$role] = min($score, 100);
        }
        
        arsort($scores);
        return $scores;
    }
}

if (isset($_GET['api']) && $_GET['api'] === 'role-analysis') {
    header('Content-Type: application/json');
    $scanner = new RoleScanner();
    echo json_encode($scanner->generateRoleReport());
    exit;
}
?>
     