<?php

namespace edu\wisc\services\caos;

class ChubService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'nameType' => 'edu\\wisc\\services\\caos\\nameType',
      'personAttributesType' => 'edu\\wisc\\services\\caos\\personAttributesType',
      'personType' => 'edu\\wisc\\services\\caos\\personType',
      'committeeType' => 'edu\\wisc\\services\\caos\\committeeType',
      'codeDescriptionPairType' => 'edu\\wisc\\services\\caos\\codeDescriptionPairType',
      'ferpaAttributes' => 'edu\\wisc\\services\\caos\\ferpaAttributes',
      'instructor' => 'edu\\wisc\\services\\caos\\instructor',
      'baseStudent' => 'edu\\wisc\\services\\caos\\baseStudent',
      'student' => 'edu\\wisc\\services\\caos\\student',
      'studentClassMembership' => 'edu\\wisc\\services\\caos\\studentClassMembership',
      'session' => 'edu\\wisc\\services\\caos\\session',
      'termType' => 'edu\\wisc\\services\\caos\\termType',
      'classUniqueId' => 'edu\\wisc\\services\\caos\\classUniqueId',
      'schoolCollege' => 'edu\\wisc\\services\\caos\\schoolCollege',
      'subjectType' => 'edu\\wisc\\services\\caos\\subjectType',
      'instructorAffiliation' => 'edu\\wisc\\services\\caos\\instructorAffiliation',
      'instructorAffiliationClass' => 'edu\\wisc\\services\\caos\\instructorAffiliationClass',
      'topic' => 'edu\\wisc\\services\\caos\\topic',
      'gradingBasisType' => 'edu\\wisc\\services\\caos\\gradingBasisType',
      'course' => 'edu\\wisc\\services\\caos\\course',
      'enrollmentStatus' => 'edu\\wisc\\services\\caos\\enrollmentStatus',
      'classAttribute' => 'edu\\wisc\\services\\caos\\classAttribute',
      'class' => 'edu\\wisc\\services\\caos\\classCustom',
      'crossListing' => 'edu\\wisc\\services\\caos\\crossListing',
      'classRoster' => 'edu\\wisc\\services\\caos\\classRoster',
      'building' => 'edu\\wisc\\services\\caos\\building',
      'classMeeting' => 'edu\\wisc\\services\\caos\\classMeeting',
      'textbook' => 'edu\\wisc\\services\\caos\\textbook',
      'otherMaterial' => 'edu\\wisc\\services\\caos\\otherMaterial',
      'classMaterialsType' => 'edu\\wisc\\services\\caos\\classMaterialsType',
      'classMaterialsURI' => 'edu\\wisc\\services\\caos\\classMaterialsURI',
      'enrollmentPackageUniqueId' => 'edu\\wisc\\services\\caos\\enrollmentPackageUniqueId',
      'enrollmentPackage' => 'edu\\wisc\\services\\caos\\enrollmentPackage',
      'enrollmentPackageClass' => 'edu\\wisc\\services\\caos\\enrollmentPackageClass',
      'labeledURI' => 'edu\\wisc\\services\\caos\\labeledURI',
      'instructorProvidedClassDetails' => 'edu\\wisc\\services\\caos\\instructorProvidedClassDetails',
      'courseGuideRoadmap' => 'edu\\wisc\\services\\caos\\courseGuideRoadmap',
      'academicSummaryType' => 'edu\\wisc\\services\\caos\\academicSummaryType',
      'performanceTermType' => 'edu\\wisc\\services\\caos\\performanceTermType',
      'photoInfoType' => 'edu\\wisc\\services\\caos\\photoInfoType',
      'academicObjectiveType' => 'edu\\wisc\\services\\caos\\academicObjectiveType',
      'programsType' => 'edu\\wisc\\services\\caos\\programsType',
      'programType' => 'edu\\wisc\\services\\caos\\programType',
      'plansType' => 'edu\\wisc\\services\\caos\\plansType',
      'planType' => 'edu\\wisc\\services\\caos\\planType',
      'subPlansType' => 'edu\\wisc\\services\\caos\\subPlansType',
      'subPlanType' => 'edu\\wisc\\services\\caos\\subPlanType',
      'degreeCheckoutStatusType' => 'edu\\wisc\\services\\caos\\degreeCheckoutStatusType',
      'studentDirectoryType' => 'edu\\wisc\\services\\caos\\studentDirectoryType',
      'levelType' => 'edu\\wisc\\services\\caos\\levelType',
      'advisorsType' => 'edu\\wisc\\services\\caos\\advisorsType',
      'baseAdvisor' => 'edu\\wisc\\services\\caos\\baseAdvisor',
      'advisorType' => 'edu\\wisc\\services\\caos\\advisorType',
      'advisorCommitteesType' => 'edu\\wisc\\services\\caos\\advisorCommitteesType',
      'baseAdvisorCommittee' => 'edu\\wisc\\services\\caos\\baseAdvisorCommittee',
      'advisorCommitteeType' => 'edu\\wisc\\services\\caos\\advisorCommitteeType',
      'advisorCommitteeRelationshipsType' => 'edu\\wisc\\services\\caos\\advisorCommitteeRelationshipsType',
      'advisorCommitteeRelationshipType' => 'edu\\wisc\\services\\caos\\advisorCommitteeRelationshipType',
      'academicStandingActionsType' => 'edu\\wisc\\services\\caos\\academicStandingActionsType',
      'academicStandingActionType' => 'edu\\wisc\\services\\caos\\academicStandingActionType',
      'studentAdvisorRelationshipsType' => 'edu\\wisc\\services\\caos\\studentAdvisorRelationshipsType',
      'studentAdvisorRelationshipType' => 'edu\\wisc\\services\\caos\\studentAdvisorRelationshipType',
      'addressType' => 'edu\\wisc\\services\\caos\\addressType',
      'creditsType' => 'edu\\wisc\\services\\caos\\creditsType',
      'creditTotalsType' => 'edu\\wisc\\services\\caos\\creditTotalsType',
      'creditsCumulativeType' => 'edu\\wisc\\services\\caos\\creditsCumulativeType',
      'creditTermType' => 'edu\\wisc\\services\\caos\\creditTermType',
      'creditTermsType' => 'edu\\wisc\\services\\caos\\creditTermsType',
      'transferCreditType' => 'edu\\wisc\\services\\caos\\transferCreditType',
      'transferCreditsType' => 'edu\\wisc\\services\\caos\\transferCreditsType',
      'entryInformationType' => 'edu\\wisc\\services\\caos\\entryInformationType',
      'entryEventsType' => 'edu\\wisc\\services\\caos\\entryEventsType',
      'entryEventType' => 'edu\\wisc\\services\\caos\\entryEventType',
      'testScoresType' => 'edu\\wisc\\services\\caos\\testScoresType',
      'testType' => 'edu\\wisc\\services\\caos\\testType',
      'testComponentsType' => 'edu\\wisc\\services\\caos\\testComponentsType',
      'testComponentType' => 'edu\\wisc\\services\\caos\\testComponentType',
      'range' => 'edu\\wisc\\services\\caos\\range',
      'testResultsType' => 'edu\\wisc\\services\\caos\\testResultsType',
      'testResultType' => 'edu\\wisc\\services\\caos\\testResultType',
      'integerRangeType' => 'edu\\wisc\\services\\caos\\integerRangeType',
      'secondarySchoolsType' => 'edu\\wisc\\services\\caos\\secondarySchoolsType',
      'transcriptTextType' => 'edu\\wisc\\services\\caos\\transcriptTextType',
      'secondarySchoolType' => 'edu\\wisc\\services\\caos\\secondarySchoolType',
      'subjectAreasType' => 'edu\\wisc\\services\\caos\\subjectAreasType',
      'subjectAreaType' => 'edu\\wisc\\services\\caos\\subjectAreaType',
      'areaOfStudyType' => 'edu\\wisc\\services\\caos\\areaOfStudyType',
      'enrollmentType' => 'edu\\wisc\\services\\caos\\enrollmentType',
      'primaryCareerType' => 'edu\\wisc\\services\\caos\\primaryCareerType',
      'careersType' => 'edu\\wisc\\services\\caos\\careersType',
      'careerType' => 'edu\\wisc\\services\\caos\\careerType',
      'residencyType' => 'edu\\wisc\\services\\caos\\residencyType',
      'phoneType' => 'edu\\wisc\\services\\caos\\phoneType',
      'studentGroupType' => 'edu\\wisc\\services\\caos\\studentGroupType',
      'studentGroupsType' => 'edu\\wisc\\services\\caos\\studentGroupsType',
      'enrollmentSummaryType' => 'edu\\wisc\\services\\caos\\enrollmentSummaryType',
      'enrollmentTermType' => 'edu\\wisc\\services\\caos\\enrollmentTermType',
      'enrollmentClassType' => 'edu\\wisc\\services\\caos\\enrollmentClassType',
      'affiliationsType' => 'edu\\wisc\\services\\caos\\affiliationsType',
      'recruitingCategoriesType' => 'edu\\wisc\\services\\caos\\recruitingCategoriesType',
      'recruitingCategoryType' => 'edu\\wisc\\services\\caos\\recruitingCategoryType',
      'enrollmentImpacts' => 'edu\\wisc\\services\\caos\\enrollmentImpacts',
      'holdsType' => 'edu\\wisc\\services\\caos\\holdsType',
      'holdType' => 'edu\\wisc\\services\\caos\\holdType',
      'registrationAppointmentType' => 'edu\\wisc\\services\\caos\\registrationAppointmentType',
      'deansExceptions' => 'edu\\wisc\\services\\caos\\deansExceptions',
      'deansExceptionType' => 'edu\\wisc\\services\\caos\\deansExceptionType',
      'studentServiceIndicator' => 'edu\\wisc\\services\\caos\\studentServiceIndicator',
      'GetPresentTermRequest' => 'edu\\wisc\\services\\caos\\GetPresentTermRequest',
      'GetPresentTermResponse' => 'edu\\wisc\\services\\caos\\GetPresentTermResponse',
      'GetCurrentTermsRequest' => 'edu\\wisc\\services\\caos\\GetCurrentTermsRequest',
      'GetCurrentTermsResponse' => 'edu\\wisc\\services\\caos\\GetCurrentTermsResponse',
      'GetAvailableTermsRequest' => 'edu\\wisc\\services\\caos\\GetAvailableTermsRequest',
      'GetAvailableTermsResponse' => 'edu\\wisc\\services\\caos\\GetAvailableTermsResponse',
      'GetAvailableAndFutureTermsRequest' => 'edu\\wisc\\services\\caos\\GetAvailableAndFutureTermsRequest',
      'GetAvailableAndFutureTermsResponse' => 'edu\\wisc\\services\\caos\\GetAvailableAndFutureTermsResponse',
      'GetSessionsInTermRequest' => 'edu\\wisc\\services\\caos\\GetSessionsInTermRequest',
      'GetSessionsInTermResponse' => 'edu\\wisc\\services\\caos\\GetSessionsInTermResponse',
      'GetUniqueSubjectCodesRequest' => 'edu\\wisc\\services\\caos\\GetUniqueSubjectCodesRequest',
      'GetUniqueSubjectCodesResponse' => 'edu\\wisc\\services\\caos\\GetUniqueSubjectCodesResponse',
      'GetUniqueSubjectCodesByAcademicOrgRequest' => 'edu\\wisc\\services\\caos\\GetUniqueSubjectCodesByAcademicOrgRequest',
      'GetUniqueSubjectCodesByAcademicOrgResponse' => 'edu\\wisc\\services\\caos\\GetUniqueSubjectCodesByAcademicOrgResponse',
      'GetAllSchoolCollegesRequest' => 'edu\\wisc\\services\\caos\\GetAllSchoolCollegesRequest',
      'GetAllSchoolCollegesResponse' => 'edu\\wisc\\services\\caos\\GetAllSchoolCollegesResponse',
      'GetSubjectsInTermRequest' => 'edu\\wisc\\services\\caos\\GetSubjectsInTermRequest',
      'GetSubjectsInTermResponse' => 'edu\\wisc\\services\\caos\\GetSubjectsInTermResponse',
      'GetSubjectRequest' => 'edu\\wisc\\services\\caos\\GetSubjectRequest',
      'GetSubjectResponse' => 'edu\\wisc\\services\\caos\\GetSubjectResponse',
      'GetCoursesBySubjectRequest' => 'edu\\wisc\\services\\caos\\GetCoursesBySubjectRequest',
      'GetCoursesBySubjectResponse' => 'edu\\wisc\\services\\caos\\GetCoursesBySubjectResponse',
      'GetCourseIdsBySubjectRequest' => 'edu\\wisc\\services\\caos\\GetCourseIdsBySubjectRequest',
      'GetCourseIdsBySubjectResponse' => 'edu\\wisc\\services\\caos\\GetCourseIdsBySubjectResponse',
      'GetCourseHistoryRequest' => 'edu\\wisc\\services\\caos\\GetCourseHistoryRequest',
      'GetCourseHistoryResponse' => 'edu\\wisc\\services\\caos\\GetCourseHistoryResponse',
      'GetCourseHistoryByCatalogNumberRequest' => 'edu\\wisc\\services\\caos\\GetCourseHistoryByCatalogNumberRequest',
      'GetCourseHistoryByCatalogNumberResponse' => 'edu\\wisc\\services\\caos\\GetCourseHistoryByCatalogNumberResponse',
      'GetCourseByCatalogNumberRequest' => 'edu\\wisc\\services\\caos\\GetCourseByCatalogNumberRequest',
      'GetCourseByCatalogNumberResponse' => 'edu\\wisc\\services\\caos\\GetCourseByCatalogNumberResponse',
      'GetCourseByCourseIdRequest' => 'edu\\wisc\\services\\caos\\GetCourseByCourseIdRequest',
      'GetCourseByCourseIdResponse' => 'edu\\wisc\\services\\caos\\GetCourseByCourseIdResponse',
      'GetCrossListedSubjectsRequest' => 'edu\\wisc\\services\\caos\\GetCrossListedSubjectsRequest',
      'GetCrossListedSubjectsResponse' => 'edu\\wisc\\services\\caos\\GetCrossListedSubjectsResponse',
      'GetCourseWithCrossListedSubjectsRequest' => 'edu\\wisc\\services\\caos\\GetCourseWithCrossListedSubjectsRequest',
      'GetCourseWithCrossListedSubjectsResponse' => 'edu\\wisc\\services\\caos\\GetCourseWithCrossListedSubjectsResponse',
      'GetClassRequest' => 'edu\\wisc\\services\\caos\\GetClassRequest',
      'GetClassResponse' => 'edu\\wisc\\services\\caos\\GetClassResponse',
      'GetClassesRequest' => 'edu\\wisc\\services\\caos\\GetClassesRequest',
      'GetClassesResponse' => 'edu\\wisc\\services\\caos\\GetClassesResponse',
      'GetClassesMeetingWithinBuildingRequest' => 'edu\\wisc\\services\\caos\\GetClassesMeetingWithinBuildingRequest',
      'GetClassesMeetingWithinBuildingResponse' => 'edu\\wisc\\services\\caos\\GetClassesMeetingWithinBuildingResponse',
      'GetClassesWithDefinedMaterialsRequest' => 'edu\\wisc\\services\\caos\\GetClassesWithDefinedMaterialsRequest',
      'GetClassesWithDefinedMaterialsResponse' => 'edu\\wisc\\services\\caos\\GetClassesWithDefinedMaterialsResponse',
      'GetClassMaterialsRequest' => 'edu\\wisc\\services\\caos\\GetClassMaterialsRequest',
      'GetClassMaterialsResponse' => 'edu\\wisc\\services\\caos\\GetClassMaterialsResponse',
      'GetClassMaterialsForCourseRequest' => 'edu\\wisc\\services\\caos\\GetClassMaterialsForCourseRequest',
      'GetClassMaterialsForCourseResponse' => 'edu\\wisc\\services\\caos\\GetClassMaterialsForCourseResponse',
      'GetClassMaterialsURIRequest' => 'edu\\wisc\\services\\caos\\GetClassMaterialsURIRequest',
      'GetClassMaterialsURIResponse' => 'edu\\wisc\\services\\caos\\GetClassMaterialsURIResponse',
      'GetClassMaterialsURIForCourseRequest' => 'edu\\wisc\\services\\caos\\GetClassMaterialsURIForCourseRequest',
      'GetClassMaterialsURIForCourseResponse' => 'edu\\wisc\\services\\caos\\GetClassMaterialsURIForCourseResponse',
      'GetClassMaterialsURIForCourseByCatalogNumberRequest' => 'edu\\wisc\\services\\caos\\GetClassMaterialsURIForCourseByCatalogNumberRequest',
      'GetClassMaterialsURIForCourseByCatalogNumberResponse' => 'edu\\wisc\\services\\caos\\GetClassMaterialsURIForCourseByCatalogNumberResponse',
      'GetClassMeetingsRequest' => 'edu\\wisc\\services\\caos\\GetClassMeetingsRequest',
      'GetClassMeetingsResponse' => 'edu\\wisc\\services\\caos\\GetClassMeetingsResponse',
      'GetUniqueClassAttributesInTermRequest' => 'edu\\wisc\\services\\caos\\GetUniqueClassAttributesInTermRequest',
      'GetUniqueClassAttributesInTermResponse' => 'edu\\wisc\\services\\caos\\GetUniqueClassAttributesInTermResponse',
      'GetClassRosterRequest' => 'edu\\wisc\\services\\caos\\GetClassRosterRequest',
      'GetClassRosterResponse' => 'edu\\wisc\\services\\caos\\GetClassRosterResponse',
      'GetCombinedClassRosterRequest' => 'edu\\wisc\\services\\caos\\GetCombinedClassRosterRequest',
      'GetCombinedClassRosterResponse' => 'edu\\wisc\\services\\caos\\GetCombinedClassRosterResponse',
      'GetClassUniqueIdsRequest' => 'edu\\wisc\\services\\caos\\GetClassUniqueIdsRequest',
      'GetClassUniqueIdsResponse' => 'edu\\wisc\\services\\caos\\GetClassUniqueIdsResponse',
      'GetCrossListedClassUniqueIdsRequest' => 'edu\\wisc\\services\\caos\\GetCrossListedClassUniqueIdsRequest',
      'GetCrossListedClassUniqueIdsResponse' => 'edu\\wisc\\services\\caos\\GetCrossListedClassUniqueIdsResponse',
      'GetCrossListedClassesRequest' => 'edu\\wisc\\services\\caos\\GetCrossListedClassesRequest',
      'GetCrossListedClassesResponse' => 'edu\\wisc\\services\\caos\\GetCrossListedClassesResponse',
      'GetEnrolledClassUniqueIdsRequest' => 'edu\\wisc\\services\\caos\\GetEnrolledClassUniqueIdsRequest',
      'GetEnrolledClassUniqueIdsResponse' => 'edu\\wisc\\services\\caos\\GetEnrolledClassUniqueIdsResponse',
      'GetEnrolledClassesRequest' => 'edu\\wisc\\services\\caos\\GetEnrolledClassesRequest',
      'GetEnrolledClassesResponse' => 'edu\\wisc\\services\\caos\\GetEnrolledClassesResponse',
      'GetEnrolledInstructorAffiliationClassesRequest' => 'edu\\wisc\\services\\caos\\GetEnrolledInstructorAffiliationClassesRequest',
      'GetEnrolledInstructorAffiliationClassesResponse' => 'edu\\wisc\\services\\caos\\GetEnrolledInstructorAffiliationClassesResponse',
      'GetEnrollmentPackagesRequest' => 'edu\\wisc\\services\\caos\\GetEnrollmentPackagesRequest',
      'GetEnrollmentPackagesResponse' => 'edu\\wisc\\services\\caos\\GetEnrollmentPackagesResponse',
      'GetInstructorsByPrimaryTeachingOrgRequest' => 'edu\\wisc\\services\\caos\\GetInstructorsByPrimaryTeachingOrgRequest',
      'GetInstructorsByPrimaryTeachingOrgResponse' => 'edu\\wisc\\services\\caos\\GetInstructorsByPrimaryTeachingOrgResponse',
      'GetInstructorAffiliationsRequest' => 'edu\\wisc\\services\\caos\\GetInstructorAffiliationsRequest',
      'GetInstructorAffiliationsResponse' => 'edu\\wisc\\services\\caos\\GetInstructorAffiliationsResponse',
      'GetInstructorAffiliationsForCourseRequest' => 'edu\\wisc\\services\\caos\\GetInstructorAffiliationsForCourseRequest',
      'GetInstructorAffiliationsForCourseResponse' => 'edu\\wisc\\services\\caos\\GetInstructorAffiliationsForCourseResponse',
      'GetInstructorAffiliationsForTeacherRequest' => 'edu\\wisc\\services\\caos\\GetInstructorAffiliationsForTeacherRequest',
      'GetInstructorAffiliationsForTeacherResponse' => 'edu\\wisc\\services\\caos\\GetInstructorAffiliationsForTeacherResponse',
      'GetInstructorAffiliationClassesForCourseRequest' => 'edu\\wisc\\services\\caos\\GetInstructorAffiliationClassesForCourseRequest',
      'GetInstructorAffiliationClassesForCourseResponse' => 'edu\\wisc\\services\\caos\\GetInstructorAffiliationClassesForCourseResponse',
      'GetInstructorAffiliationClassesForTeacherRequest' => 'edu\\wisc\\services\\caos\\GetInstructorAffiliationClassesForTeacherRequest',
      'GetInstructorAffiliationClassesForTeacherResponse' => 'edu\\wisc\\services\\caos\\GetInstructorAffiliationClassesForTeacherResponse',
      'GetSubjectsInstructorIsTeachingRequest' => 'edu\\wisc\\services\\caos\\GetSubjectsInstructorIsTeachingRequest',
      'GetSubjectsInstructorIsTeachingResponse' => 'edu\\wisc\\services\\caos\\GetSubjectsInstructorIsTeachingResponse',
      'GetStudentsThatHaveDroppedRequest' => 'edu\\wisc\\services\\caos\\GetStudentsThatHaveDroppedRequest',
      'GetStudentsThatHaveDroppedResponse' => 'edu\\wisc\\services\\caos\\GetStudentsThatHaveDroppedResponse',
      'GetStudentsThatHaveAddedRequest' => 'edu\\wisc\\services\\caos\\GetStudentsThatHaveAddedRequest',
      'GetStudentsThatHaveAddedResponse' => 'edu\\wisc\\services\\caos\\GetStudentsThatHaveAddedResponse',
      'GetStudentEmplidsEnrolledInTermRequest' => 'edu\\wisc\\services\\caos\\GetStudentEmplidsEnrolledInTermRequest',
      'GetStudentEmplidsEnrolledInTermResponse' => 'edu\\wisc\\services\\caos\\GetStudentEmplidsEnrolledInTermResponse',
      'GetStudentsRequest' => 'edu\\wisc\\services\\caos\\GetStudentsRequest',
      'GetStudentsResponse' => 'edu\\wisc\\services\\caos\\GetStudentsResponse',
      'GetTermLastUpdatedRequest' => 'edu\\wisc\\services\\caos\\GetTermLastUpdatedRequest',
      'GetTermLastUpdatedResponse' => 'edu\\wisc\\services\\caos\\GetTermLastUpdatedResponse',
      'GetTermRequest' => 'edu\\wisc\\services\\caos\\GetTermRequest',
      'GetTermResponse' => 'edu\\wisc\\services\\caos\\GetTermResponse',
      'IsCrossListedRequest' => 'edu\\wisc\\services\\caos\\IsCrossListedRequest',
      'IsCrossListedResponse' => 'edu\\wisc\\services\\caos\\IsCrossListedResponse',
      'GetNonTeachingInstructorsRequest' => 'edu\\wisc\\services\\caos\\GetNonTeachingInstructorsRequest',
      'GetNonTeachingInstructorsResponse' => 'edu\\wisc\\services\\caos\\GetNonTeachingInstructorsResponse',
      'GetCourseGuidePrimaryRoadmapCoursesRequest' => 'edu\\wisc\\services\\caos\\GetCourseGuidePrimaryRoadmapCoursesRequest',
      'GetCourseGuidePrimaryRoadmapCoursesResponse' => 'edu\\wisc\\services\\caos\\GetCourseGuidePrimaryRoadmapCoursesResponse',
      'GetCourseGuideRoadmapsRequest' => 'edu\\wisc\\services\\caos\\GetCourseGuideRoadmapsRequest',
      'GetCourseGuideRoadmapsResponse' => 'edu\\wisc\\services\\caos\\GetCourseGuideRoadmapsResponse',
      'GetCourseGuideRoadmapCoursesRequest' => 'edu\\wisc\\services\\caos\\GetCourseGuideRoadmapCoursesRequest',
      'GetCourseGuideRoadmapCoursesResponse' => 'edu\\wisc\\services\\caos\\GetCourseGuideRoadmapCoursesResponse',
      'GetInstructorProvidedClassDetailsRequest' => 'edu\\wisc\\services\\caos\\GetInstructorProvidedClassDetailsRequest',
      'GetInstructorProvidedClassDetailsResponse' => 'edu\\wisc\\services\\caos\\GetInstructorProvidedClassDetailsResponse',
      'GetInstructorProvidedClassDetailsForCourseRequest' => 'edu\\wisc\\services\\caos\\GetInstructorProvidedClassDetailsForCourseRequest',
      'GetInstructorProvidedClassDetailsForCourseResponse' => 'edu\\wisc\\services\\caos\\GetInstructorProvidedClassDetailsForCourseResponse',
      'GetUniqueClassInstructionModesInTermRequest' => 'edu\\wisc\\services\\caos\\GetUniqueClassInstructionModesInTermRequest',
      'GetUniqueClassInstructionModesInTermResponse' => 'edu\\wisc\\services\\caos\\GetUniqueClassInstructionModesInTermResponse',
      'GetAdvisorsRequest' => 'edu\\wisc\\services\\caos\\GetAdvisorsRequest',
      'GetAdvisorsResponse' => 'edu\\wisc\\services\\caos\\GetAdvisorsResponse',
      'GetAdvisorCommitteesRequest' => 'edu\\wisc\\services\\caos\\GetAdvisorCommitteesRequest',
      'advisorCommitteeCodes' => 'edu\\wisc\\services\\caos\\advisorCommitteeCodes',
      'GetAdvisorCommitteesResponse' => 'edu\\wisc\\services\\caos\\GetAdvisorCommitteesResponse',
      'GetProgramsRequest' => 'edu\\wisc\\services\\caos\\GetProgramsRequest',
      'GetProgramsResponse' => 'edu\\wisc\\services\\caos\\GetProgramsResponse',
      'GetStudentGroupsRequest' => 'edu\\wisc\\services\\caos\\GetStudentGroupsRequest',
      'GetStudentGroupsResponse' => 'edu\\wisc\\services\\caos\\GetStudentGroupsResponse',
      'GetAcademicStandingActionsRequest' => 'edu\\wisc\\services\\caos\\GetAcademicStandingActionsRequest',
      'GetAcademicStandingActionsResponse' => 'edu\\wisc\\services\\caos\\GetAcademicStandingActionsResponse',
      'GetStudentServiceIndicatorsRequest' => 'edu\\wisc\\services\\caos\\GetStudentServiceIndicatorsRequest',
      'GetStudentServiceIndicatorsResponse' => 'edu\\wisc\\services\\caos\\GetStudentServiceIndicatorsResponse',
      'personQuery' => 'edu\\wisc\\services\\caos\\personQuery',
      'studentDataOptions' => 'edu\\wisc\\services\\caos\\studentDataOptions',
      'advisingDataOptionsType' => 'edu\\wisc\\services\\caos\\advisingDataOptionsType',
      'droppedStudent' => 'edu\\wisc\\services\\caos\\droppedStudent',
      'addedStudent' => 'edu\\wisc\\services\\caos\\addedStudent',
      'serviceAlertType' => 'edu\\wisc\\services\\caos\\serviceAlertType',
      'serviceAlertsType' => 'edu\\wisc\\services\\caos\\serviceAlertsType',
      'abstractServiceAlertType' => 'edu\\wisc\\services\\caos\\abstractServiceAlertType',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'http://esb.services.wisc.edu/esbv2/CHUB/WebService/chub-ws-1.5/chub.wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * @param GetClassesMeetingWithinBuildingRequest $GetClassesMeetingWithinBuildingRequest
     * @return GetClassesMeetingWithinBuildingResponse
     */
    public function GetClassesMeetingWithinBuilding(GetClassesMeetingWithinBuildingRequest $GetClassesMeetingWithinBuildingRequest)
    {
      return $this->__soapCall('GetClassesMeetingWithinBuilding', array($GetClassesMeetingWithinBuildingRequest));
    }

    /**
     * @param GetStudentGroupsRequest $GetStudentGroupsRequest
     * @return GetStudentGroupsResponse
     */
    public function GetStudentGroups(GetStudentGroupsRequest $GetStudentGroupsRequest)
    {
      return $this->__soapCall('GetStudentGroups', array($GetStudentGroupsRequest));
    }

    /**
     * @param GetCurrentTermsRequest $GetCurrentTermsRequest
     * @return GetCurrentTermsResponse
     */
    public function GetCurrentTerms(GetCurrentTermsRequest $GetCurrentTermsRequest)
    {
      return $this->__soapCall('GetCurrentTerms', array($GetCurrentTermsRequest));
    }

    /**
     * @param GetAvailableAndFutureTermsRequest $GetAvailableAndFutureTermsRequest
     * @return GetAvailableAndFutureTermsResponse
     */
    public function GetAvailableAndFutureTerms(GetAvailableAndFutureTermsRequest $GetAvailableAndFutureTermsRequest)
    {
      return $this->__soapCall('GetAvailableAndFutureTerms', array($GetAvailableAndFutureTermsRequest));
    }

    /**
     * @param GetClassesWithDefinedMaterialsRequest $GetClassesWithDefinedMaterialsRequest
     * @return GetClassesWithDefinedMaterialsResponse
     */
    public function GetClassesWithDefinedMaterials(GetClassesWithDefinedMaterialsRequest $GetClassesWithDefinedMaterialsRequest)
    {
      return $this->__soapCall('GetClassesWithDefinedMaterials', array($GetClassesWithDefinedMaterialsRequest));
    }

    /**
     * @param GetAcademicStandingActionsRequest $GetAcademicStandingActionsRequest
     * @return GetAcademicStandingActionsResponse
     */
    public function GetAcademicStandingActions(GetAcademicStandingActionsRequest $GetAcademicStandingActionsRequest)
    {
      return $this->__soapCall('GetAcademicStandingActions', array($GetAcademicStandingActionsRequest));
    }

    /**
     * @param GetCourseHistoryRequest $GetCourseHistoryRequest
     * @return GetCourseHistoryResponse
     */
    public function GetCourseHistory(GetCourseHistoryRequest $GetCourseHistoryRequest)
    {
      return $this->__soapCall('GetCourseHistory', array($GetCourseHistoryRequest));
    }

    /**
     * @param GetEnrolledClassesRequest $GetEnrolledClassesRequest
     * @return GetEnrolledClassesResponse
     */
    public function GetEnrolledClasses(GetEnrolledClassesRequest $GetEnrolledClassesRequest)
    {
      return $this->__soapCall('GetEnrolledClasses', array($GetEnrolledClassesRequest));
    }

    /**
     * @param GetCourseByCatalogNumberRequest $GetCourseByCatalogNumberRequest
     * @return GetCourseByCatalogNumberResponse
     */
    public function GetCourseByCatalogNumber(GetCourseByCatalogNumberRequest $GetCourseByCatalogNumberRequest)
    {
      return $this->__soapCall('GetCourseByCatalogNumber', array($GetCourseByCatalogNumberRequest));
    }

    /**
     * @param GetClassMeetingsRequest $GetClassMeetingsRequest
     * @return GetClassMeetingsResponse
     */
    public function GetClassMeetings(GetClassMeetingsRequest $GetClassMeetingsRequest)
    {
      return $this->__soapCall('GetClassMeetings', array($GetClassMeetingsRequest));
    }

    /**
     * @param GetCrossListedClassUniqueIdsRequest $GetCrossListedClassUniqueIdsRequest
     * @return GetCrossListedClassUniqueIdsResponse
     */
    public function GetCrossListedClassUniqueIds(GetCrossListedClassUniqueIdsRequest $GetCrossListedClassUniqueIdsRequest)
    {
      return $this->__soapCall('GetCrossListedClassUniqueIds', array($GetCrossListedClassUniqueIdsRequest));
    }

    /**
     * @param GetUniqueSubjectCodesRequest $GetUniqueSubjectCodesRequest
     * @return GetUniqueSubjectCodesResponse
     */
    public function GetUniqueSubjectCodes(GetUniqueSubjectCodesRequest $GetUniqueSubjectCodesRequest)
    {
      return $this->__soapCall('GetUniqueSubjectCodes', array($GetUniqueSubjectCodesRequest));
    }

    /**
     * @param GetStudentEmplidsEnrolledInTermRequest $GetStudentEmplidsEnrolledInTermRequest
     * @return GetStudentEmplidsEnrolledInTermResponse
     */
    public function GetStudentEmplidsEnrolledInTerm(GetStudentEmplidsEnrolledInTermRequest $GetStudentEmplidsEnrolledInTermRequest)
    {
      return $this->__soapCall('GetStudentEmplidsEnrolledInTerm', array($GetStudentEmplidsEnrolledInTermRequest));
    }

    /**
     * @param GetCourseGuideRoadmapsRequest $GetCourseGuideRoadmapsRequest
     * @return GetCourseGuideRoadmapsResponse
     */
    public function GetCourseGuideRoadmaps(GetCourseGuideRoadmapsRequest $GetCourseGuideRoadmapsRequest)
    {
      return $this->__soapCall('GetCourseGuideRoadmaps', array($GetCourseGuideRoadmapsRequest));
    }

    /**
     * @param GetStudentServiceIndicatorsRequest $GetStudentServiceIndicatorsRequest
     * @return GetStudentServiceIndicatorsResponse
     */
    public function GetStudentServiceIndicators(GetStudentServiceIndicatorsRequest $GetStudentServiceIndicatorsRequest)
    {
      return $this->__soapCall('GetStudentServiceIndicators', array($GetStudentServiceIndicatorsRequest));
    }

    /**
     * @param GetClassUniqueIdsRequest $GetClassUniqueIdsRequest
     * @return GetClassUniqueIdsResponse
     */
    public function GetClassUniqueIds(GetClassUniqueIdsRequest $GetClassUniqueIdsRequest)
    {
      return $this->__soapCall('GetClassUniqueIds', array($GetClassUniqueIdsRequest));
    }

    /**
     * @param GetClassRequest $GetClassRequest
     * @return GetClassResponse
     */
    public function GetClass(GetClassRequest $GetClassRequest)
    {
      return $this->__soapCall('GetClass', array($GetClassRequest));
    }

    /**
     * @param GetTermRequest $GetTermRequest
     * @return GetTermResponse
     */
    public function GetTerm(GetTermRequest $GetTermRequest)
    {
      return $this->__soapCall('GetTerm', array($GetTermRequest));
    }

    /**
     * @param GetCourseByCourseIdRequest $GetCourseByCourseIdRequest
     * @return GetCourseByCourseIdResponse
     */
    public function GetCourseByCourseId(GetCourseByCourseIdRequest $GetCourseByCourseIdRequest)
    {
      return $this->__soapCall('GetCourseByCourseId', array($GetCourseByCourseIdRequest));
    }

    /**
     * @param GetAllSchoolCollegesRequest $GetAllSchoolCollegesRequest
     * @return GetAllSchoolCollegesResponse
     */
    public function GetAllSchoolColleges(GetAllSchoolCollegesRequest $GetAllSchoolCollegesRequest)
    {
      return $this->__soapCall('GetAllSchoolColleges', array($GetAllSchoolCollegesRequest));
    }

    /**
     * @param GetUniqueClassAttributesInTermRequest $GetUniqueClassAttributesInTermRequest
     * @return GetUniqueClassAttributesInTermResponse
     */
    public function GetUniqueClassAttributesInTerm(GetUniqueClassAttributesInTermRequest $GetUniqueClassAttributesInTermRequest)
    {
      return $this->__soapCall('GetUniqueClassAttributesInTerm', array($GetUniqueClassAttributesInTermRequest));
    }

    /**
     * @param GetClassRosterRequest $GetClassRosterRequest
     * @return GetClassRosterResponse
     */
    public function GetClassRoster(GetClassRosterRequest $GetClassRosterRequest)
    {
      return $this->__soapCall('GetClassRoster', array($GetClassRosterRequest));
    }

    /**
     * @param GetSessionsInTermRequest $GetSessionsInTermRequest
     * @return GetSessionsInTermResponse
     */
    public function GetSessionsInTerm(GetSessionsInTermRequest $GetSessionsInTermRequest)
    {
      return $this->__soapCall('GetSessionsInTerm', array($GetSessionsInTermRequest));
    }

    /**
     * @param GetStudentsThatHaveAddedRequest $GetStudentsThatHaveAddedRequest
     * @return GetStudentsThatHaveAddedResponse
     */
    public function GetStudentsThatHaveAdded(GetStudentsThatHaveAddedRequest $GetStudentsThatHaveAddedRequest)
    {
      return $this->__soapCall('GetStudentsThatHaveAdded', array($GetStudentsThatHaveAddedRequest));
    }

    /**
     * @param GetSubjectsInTermRequest $GetSubjectsInTermRequest
     * @return GetSubjectsInTermResponse
     */
    public function GetSubjectsInTerm(GetSubjectsInTermRequest $GetSubjectsInTermRequest)
    {
      return $this->__soapCall('GetSubjectsInTerm', array($GetSubjectsInTermRequest));
    }

    /**
     * @param GetInstructorAffiliationsForCourseRequest $GetInstructorAffiliationsForCourseRequest
     * @return GetInstructorAffiliationsForCourseResponse
     */
    public function GetInstructorAffiliationsForCourse(GetInstructorAffiliationsForCourseRequest $GetInstructorAffiliationsForCourseRequest)
    {
      return $this->__soapCall('GetInstructorAffiliationsForCourse', array($GetInstructorAffiliationsForCourseRequest));
    }

    /**
     * @param GetSubjectsInstructorIsTeachingRequest $GetSubjectsInstructorIsTeachingRequest
     * @return GetSubjectsInstructorIsTeachingResponse
     */
    public function GetSubjectsInstructorIsTeaching(GetSubjectsInstructorIsTeachingRequest $GetSubjectsInstructorIsTeachingRequest)
    {
      return $this->__soapCall('GetSubjectsInstructorIsTeaching', array($GetSubjectsInstructorIsTeachingRequest));
    }

    /**
     * @param GetInstructorAffiliationsRequest $GetInstructorAffiliationsRequest
     * @return GetInstructorAffiliationsResponse
     */
    public function GetInstructorAffiliations(GetInstructorAffiliationsRequest $GetInstructorAffiliationsRequest)
    {
      return $this->__soapCall('GetInstructorAffiliations', array($GetInstructorAffiliationsRequest));
    }

    /**
     * @param GetClassMaterialsURIForCourseRequest $GetClassMaterialsURIForCourseRequest
     * @return GetClassMaterialsURIForCourseResponse
     */
    public function GetClassMaterialsURIForCourse(GetClassMaterialsURIForCourseRequest $GetClassMaterialsURIForCourseRequest)
    {
      return $this->__soapCall('GetClassMaterialsURIForCourse', array($GetClassMaterialsURIForCourseRequest));
    }

    /**
     * @param GetInstructorProvidedClassDetailsRequest $GetInstructorProvidedClassDetailsRequest
     * @return GetInstructorProvidedClassDetailsResponse
     */
    public function GetInstructorProvidedClassDetails(GetInstructorProvidedClassDetailsRequest $GetInstructorProvidedClassDetailsRequest)
    {
      return $this->__soapCall('GetInstructorProvidedClassDetails', array($GetInstructorProvidedClassDetailsRequest));
    }

    /**
     * @param GetStudentsThatHaveDroppedRequest $GetStudentsThatHaveDroppedRequest
     * @return GetStudentsThatHaveDroppedResponse
     */
    public function GetStudentsThatHaveDropped(GetStudentsThatHaveDroppedRequest $GetStudentsThatHaveDroppedRequest)
    {
      return $this->__soapCall('GetStudentsThatHaveDropped', array($GetStudentsThatHaveDroppedRequest));
    }

    /**
     * @param GetCourseGuidePrimaryRoadmapCoursesRequest $GetCourseGuidePrimaryRoadmapCoursesRequest
     * @return GetCourseGuidePrimaryRoadmapCoursesResponse
     */
    public function GetCourseGuidePrimaryRoadmapCourses(GetCourseGuidePrimaryRoadmapCoursesRequest $GetCourseGuidePrimaryRoadmapCoursesRequest)
    {
      return $this->__soapCall('GetCourseGuidePrimaryRoadmapCourses', array($GetCourseGuidePrimaryRoadmapCoursesRequest));
    }

    /**
     * @param GetCombinedClassRosterRequest $GetCombinedClassRosterRequest
     * @return GetCombinedClassRosterResponse
     */
    public function GetCombinedClassRoster(GetCombinedClassRosterRequest $GetCombinedClassRosterRequest)
    {
      return $this->__soapCall('GetCombinedClassRoster', array($GetCombinedClassRosterRequest));
    }

    /**
     * @param GetUniqueClassInstructionModesInTermRequest $GetUniqueClassInstructionModesInTermRequest
     * @return GetUniqueClassInstructionModesInTermResponse
     */
    public function GetUniqueClassInstructionModesInTerm(GetUniqueClassInstructionModesInTermRequest $GetUniqueClassInstructionModesInTermRequest)
    {
      return $this->__soapCall('GetUniqueClassInstructionModesInTerm', array($GetUniqueClassInstructionModesInTermRequest));
    }

    /**
     * @param IsCrossListedRequest $IsCrossListedRequest
     * @return IsCrossListedResponse
     */
    public function IsCrossListed(IsCrossListedRequest $IsCrossListedRequest)
    {
      return $this->__soapCall('IsCrossListed', array($IsCrossListedRequest));
    }

    /**
     * @param GetAdvisorsRequest $GetAdvisorsRequest
     * @return GetAdvisorsResponse
     */
    public function GetAdvisors(GetAdvisorsRequest $GetAdvisorsRequest)
    {
      return $this->__soapCall('GetAdvisors', array($GetAdvisorsRequest));
    }

    /**
     * @param GetClassMaterialsForCourseRequest $GetClassMaterialsForCourseRequest
     * @return GetClassMaterialsForCourseResponse
     */
    public function GetClassMaterialsForCourse(GetClassMaterialsForCourseRequest $GetClassMaterialsForCourseRequest)
    {
      return $this->__soapCall('GetClassMaterialsForCourse', array($GetClassMaterialsForCourseRequest));
    }

    /**
     * @param GetInstructorAffiliationClassesForCourseRequest $GetInstructorAffiliationClassesForCourseRequest
     * @return GetInstructorAffiliationClassesForCourseResponse
     */
    public function GetInstructorAffiliationClassesForCourse(GetInstructorAffiliationClassesForCourseRequest $GetInstructorAffiliationClassesForCourseRequest)
    {
      return $this->__soapCall('GetInstructorAffiliationClassesForCourse', array($GetInstructorAffiliationClassesForCourseRequest));
    }

    /**
     * @param GetCourseWithCrossListedSubjectsRequest $GetCourseWithCrossListedSubjectsRequest
     * @return GetCourseWithCrossListedSubjectsResponse
     */
    public function GetCourseWithCrossListedSubjects(GetCourseWithCrossListedSubjectsRequest $GetCourseWithCrossListedSubjectsRequest)
    {
      return $this->__soapCall('GetCourseWithCrossListedSubjects', array($GetCourseWithCrossListedSubjectsRequest));
    }

    /**
     * @param GetProgramsRequest $GetProgramsRequest
     * @return GetProgramsResponse
     */
    public function GetPrograms(GetProgramsRequest $GetProgramsRequest)
    {
      return $this->__soapCall('GetPrograms', array($GetProgramsRequest));
    }

    /**
     * @param GetCrossListedClassesRequest $GetCrossListedClassesRequest
     * @return GetCrossListedClassesResponse
     */
    public function GetCrossListedClasses(GetCrossListedClassesRequest $GetCrossListedClassesRequest)
    {
      return $this->__soapCall('GetCrossListedClasses', array($GetCrossListedClassesRequest));
    }

    /**
     * @param GetPresentTermRequest $GetPresentTermRequest
     * @return GetPresentTermResponse
     */
    public function GetPresentTerm(GetPresentTermRequest $GetPresentTermRequest)
    {
      return $this->__soapCall('GetPresentTerm', array($GetPresentTermRequest));
    }

    /**
     * @param GetStudentsRequest $GetStudentsRequest
     * @return GetStudentsResponse
     */
    public function GetStudents(GetStudentsRequest $GetStudentsRequest)
    {
      return $this->__soapCall('GetStudents', array($GetStudentsRequest));
    }

    /**
     * @param GetInstructorProvidedClassDetailsForCourseRequest $GetInstructorProvidedClassDetailsForCourseRequest
     * @return GetInstructorProvidedClassDetailsForCourseResponse
     */
    public function GetInstructorProvidedClassDetailsForCourse(GetInstructorProvidedClassDetailsForCourseRequest $GetInstructorProvidedClassDetailsForCourseRequest)
    {
      return $this->__soapCall('GetInstructorProvidedClassDetailsForCourse', array($GetInstructorProvidedClassDetailsForCourseRequest));
    }

    /**
     * @param GetClassMaterialsURIForCourseByCatalogNumberRequest $GetClassMaterialsURIForCourseByCatalogNumberRequest
     * @return GetClassMaterialsURIForCourseByCatalogNumberResponse
     */
    public function GetClassMaterialsURIForCourseByCatalogNumber(GetClassMaterialsURIForCourseByCatalogNumberRequest $GetClassMaterialsURIForCourseByCatalogNumberRequest)
    {
      return $this->__soapCall('GetClassMaterialsURIForCourseByCatalogNumber', array($GetClassMaterialsURIForCourseByCatalogNumberRequest));
    }

    /**
     * @param GetSubjectRequest $GetSubjectRequest
     * @return GetSubjectResponse
     */
    public function GetSubject(GetSubjectRequest $GetSubjectRequest)
    {
      return $this->__soapCall('GetSubject', array($GetSubjectRequest));
    }

    /**
     * @param GetCourseHistoryByCatalogNumberRequest $GetCourseHistoryByCatalogNumberRequest
     * @return GetCourseHistoryByCatalogNumberResponse
     */
    public function GetCourseHistoryByCatalogNumber(GetCourseHistoryByCatalogNumberRequest $GetCourseHistoryByCatalogNumberRequest)
    {
      return $this->__soapCall('GetCourseHistoryByCatalogNumber', array($GetCourseHistoryByCatalogNumberRequest));
    }

    /**
     * @param GetNonTeachingInstructorsRequest $GetNonTeachingInstructorsRequest
     * @return GetNonTeachingInstructorsResponse
     */
    public function GetNonTeachingInstructors(GetNonTeachingInstructorsRequest $GetNonTeachingInstructorsRequest)
    {
      return $this->__soapCall('GetNonTeachingInstructors', array($GetNonTeachingInstructorsRequest));
    }

    /**
     * @param GetUniqueSubjectCodesByAcademicOrgRequest $GetUniqueSubjectCodesByAcademicOrgRequest
     * @return GetUniqueSubjectCodesByAcademicOrgResponse
     */
    public function GetUniqueSubjectCodesByAcademicOrg(GetUniqueSubjectCodesByAcademicOrgRequest $GetUniqueSubjectCodesByAcademicOrgRequest)
    {
      return $this->__soapCall('GetUniqueSubjectCodesByAcademicOrg', array($GetUniqueSubjectCodesByAcademicOrgRequest));
    }

    /**
     * @param GetCourseGuideRoadmapCoursesRequest $GetCourseGuideRoadmapCoursesRequest
     * @return GetCourseGuideRoadmapCoursesResponse
     */
    public function GetCourseGuideRoadmapCourses(GetCourseGuideRoadmapCoursesRequest $GetCourseGuideRoadmapCoursesRequest)
    {
      return $this->__soapCall('GetCourseGuideRoadmapCourses', array($GetCourseGuideRoadmapCoursesRequest));
    }

    /**
     * @param GetInstructorAffiliationsForTeacherRequest $GetInstructorAffiliationsForTeacherRequest
     * @return GetInstructorAffiliationsForTeacherResponse
     */
    public function GetInstructorAffiliationsForTeacher(GetInstructorAffiliationsForTeacherRequest $GetInstructorAffiliationsForTeacherRequest)
    {
      return $this->__soapCall('GetInstructorAffiliationsForTeacher', array($GetInstructorAffiliationsForTeacherRequest));
    }

    /**
     * @param GetCoursesBySubjectRequest $GetCoursesBySubjectRequest
     * @return GetCoursesBySubjectResponse
     */
    public function GetCoursesBySubject(GetCoursesBySubjectRequest $GetCoursesBySubjectRequest)
    {
      return $this->__soapCall('GetCoursesBySubject', array($GetCoursesBySubjectRequest));
    }

    /**
     * @param GetEnrolledInstructorAffiliationClassesRequest $GetEnrolledInstructorAffiliationClassesRequest
     * @return GetEnrolledInstructorAffiliationClassesResponse
     */
    public function GetEnrolledInstructorAffiliationClasses(GetEnrolledInstructorAffiliationClassesRequest $GetEnrolledInstructorAffiliationClassesRequest)
    {
      return $this->__soapCall('GetEnrolledInstructorAffiliationClasses', array($GetEnrolledInstructorAffiliationClassesRequest));
    }

    /**
     * @param GetInstructorAffiliationClassesForTeacherRequest $GetInstructorAffiliationClassesForTeacherRequest
     * @return GetInstructorAffiliationClassesForTeacherResponse
     */
    public function GetInstructorAffiliationClassesForTeacher(GetInstructorAffiliationClassesForTeacherRequest $GetInstructorAffiliationClassesForTeacherRequest)
    {
      return $this->__soapCall('GetInstructorAffiliationClassesForTeacher', array($GetInstructorAffiliationClassesForTeacherRequest));
    }

    /**
     * @param GetAdvisorCommitteesRequest $GetAdvisorCommitteesRequest
     * @return GetAdvisorCommitteesResponse
     */
    public function GetAdvisorCommittees(GetAdvisorCommitteesRequest $GetAdvisorCommitteesRequest)
    {
      return $this->__soapCall('GetAdvisorCommittees', array($GetAdvisorCommitteesRequest));
    }

    /**
     * @param GetCrossListedSubjectsRequest $GetCrossListedSubjectsRequest
     * @return GetCrossListedSubjectsResponse
     */
    public function GetCrossListedSubjects(GetCrossListedSubjectsRequest $GetCrossListedSubjectsRequest)
    {
      return $this->__soapCall('GetCrossListedSubjects', array($GetCrossListedSubjectsRequest));
    }

    /**
     * @param GetEnrolledClassUniqueIdsRequest $GetEnrolledClassUniqueIdsRequest
     * @return GetEnrolledClassUniqueIdsResponse
     */
    public function GetEnrolledClassUniqueIds(GetEnrolledClassUniqueIdsRequest $GetEnrolledClassUniqueIdsRequest)
    {
      return $this->__soapCall('GetEnrolledClassUniqueIds', array($GetEnrolledClassUniqueIdsRequest));
    }

    /**
     * @param GetClassesRequest $GetClassesRequest
     * @return GetClassesResponse
     */
    public function GetClasses(GetClassesRequest $GetClassesRequest)
    {
      return $this->__soapCall('GetClasses', array($GetClassesRequest));
    }

    /**
     * @param GetAvailableTermsRequest $GetAvailableTermsRequest
     * @return GetAvailableTermsResponse
     */
    public function GetAvailableTerms(GetAvailableTermsRequest $GetAvailableTermsRequest)
    {
      return $this->__soapCall('GetAvailableTerms', array($GetAvailableTermsRequest));
    }

    /**
     * @param GetClassMaterialsURIRequest $GetClassMaterialsURIRequest
     * @return GetClassMaterialsURIResponse
     */
    public function GetClassMaterialsURI(GetClassMaterialsURIRequest $GetClassMaterialsURIRequest)
    {
      return $this->__soapCall('GetClassMaterialsURI', array($GetClassMaterialsURIRequest));
    }

    /**
     * @param GetInstructorsByPrimaryTeachingOrgRequest $GetInstructorsByPrimaryTeachingOrgRequest
     * @return GetInstructorsByPrimaryTeachingOrgResponse
     */
    public function GetInstructorsByPrimaryTeachingOrg(GetInstructorsByPrimaryTeachingOrgRequest $GetInstructorsByPrimaryTeachingOrgRequest)
    {
      return $this->__soapCall('GetInstructorsByPrimaryTeachingOrg', array($GetInstructorsByPrimaryTeachingOrgRequest));
    }

    /**
     * @param GetTermLastUpdatedRequest $GetTermLastUpdatedRequest
     * @return GetTermLastUpdatedResponse
     */
    public function GetTermLastUpdated(GetTermLastUpdatedRequest $GetTermLastUpdatedRequest)
    {
      return $this->__soapCall('GetTermLastUpdated', array($GetTermLastUpdatedRequest));
    }

    /**
     * @param GetCourseIdsBySubjectRequest $GetCourseIdsBySubjectRequest
     * @return GetCourseIdsBySubjectResponse
     */
    public function GetCourseIdsBySubject(GetCourseIdsBySubjectRequest $GetCourseIdsBySubjectRequest)
    {
      return $this->__soapCall('GetCourseIdsBySubject', array($GetCourseIdsBySubjectRequest));
    }

    /**
     * @param GetEnrollmentPackagesRequest $GetEnrollmentPackagesRequest
     * @return GetEnrollmentPackagesResponse
     */
    public function GetEnrollmentPackages(GetEnrollmentPackagesRequest $GetEnrollmentPackagesRequest)
    {
      return $this->__soapCall('GetEnrollmentPackages', array($GetEnrollmentPackagesRequest));
    }

    /**
     * @param GetClassMaterialsRequest $GetClassMaterialsRequest
     * @return GetClassMaterialsResponse
     */
    public function GetClassMaterials(GetClassMaterialsRequest $GetClassMaterialsRequest)
    {
      return $this->__soapCall('GetClassMaterials', array($GetClassMaterialsRequest));
    }

}
